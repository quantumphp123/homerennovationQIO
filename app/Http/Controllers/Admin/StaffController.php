<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Contract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $staffs = User::where('role_id', 2)->get();
        return view('admin.staff.index', compact('staffs'));
        // your code here
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
       // your code here
        Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phone' => ['required'],
            'image' => ['required'],
            'password' => ['required'],
        ])->validate();
        
        $profile_pic_path="";
        $profile_pic="";
        if($request->has('image')){
            $profile_pic_path = $request->file('image')->store('profile_pic', 'images');
            $profile_pic = explode('/', $profile_pic_path);
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'profile_pic_path' => 'profile_pic',
            'profile_pic' => $profile_pic[1],
            'password' => Hash::make($request->password),
            'role_id' => 2,
        ]);
        return redirect()->route('staff.index')->with('success', 'New User added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $staff)
    {
        $contracts=Contract::where('staff_id', $staff->id)->get();
        return view('admin.staff.view',compact('contracts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $staff)
    {
        
        return view('admin.staff.edit',compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $staff)
    {
        $this->validate($request, [
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'image' => [],
            'password' => ['required'],
        ]);
        
        if($request->has('image')){
            $profile_pic="";
            $profile_pic_path = $request->file('image')->store('profile_pic', 'images');
            $profile_pic = explode('/', $profile_pic_path);
            $staff->profile_pic=$profile_pic[1];
        }
        
        $staff->name = $request->name;
        $staff->email = $request->email;
        $staff->phone = $request->phone;
        $staff->password = Hash::make($request->password);
        $staff->save();
        return redirect()->route('staff.index')->with('success', 'Staff Information updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy(User $staff)
    {
        // your code here
        $staff->delete();
        return redirect()->back()->with('success','User deleted successfully!');
    }
    
    public function change_status(Request $request)
	{
	    $staff=User::find($request->id);
		if($staff->status == 0){
		$staff->status=1;
		}else{
		$staff->status=0;
		}
		$staff->save();
		exit();
		
	}
	
	public function reset_password_index()
	{
	    $staffs=User::where('role_id', 2)->where('reset_password_request', 1)->get();
	    return view('admin.staff.reset_password.index',compact('staffs'));
	}
	
	public function reset_password_view($id)
	{
	    $staff=User::where('id', $id)->first();
	    return view('admin.staff.reset_password.view',compact('staff'));
	}
	
	public function reset_password_post(Request $request)
	{
	    Validator::make($request->all(), [
            'password' => ['required'],
        ])->validate();
        
        $user=User::where('id', $request->id)->first();
        $user->password=Hash::make($request->password);
        $user->reset_password_request=0;
        $user->save();
        return redirect()->route('reset_password_index')->with('success', 'Password Reset Successfully');
    }
}
