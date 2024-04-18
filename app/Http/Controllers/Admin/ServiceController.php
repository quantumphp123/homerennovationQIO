<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
    */
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
    */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'image' => ['required'],
        ])->validate();
        
        $image_path="";
        $image="";
        if($request->has('image')){
            $image_path = $request->file('image')->store('service_image', 'images');
            $image = explode('/', $image_path);
        }

        Service::create([
            'service_title' => $request->title,
            'service_description' => $request->description,
            'image' => $image[1],
            'image_path' => 'service_image',
        ]);
        return redirect()->route('service.index')->with('success', 'New service added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        // your code here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.service.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Service $service)
    {
        Validator::make($request->all(), [
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'image' => [],
        ])->validate();
        
        if($request->has('image')){
            $image='';
            $image_path = $request->file('image')->store('service_image', 'images');
            $image = explode('/', $image_path);
            $service->image = $image[1];
        }
        
        $service->service_title = $request->title;
        $service->service_description = $request->description;
        $service->save();
        return redirect()->route('service.index')->with('success', 'Service Information updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->back()->with('success','Service deleted successfully!');
    }
}
