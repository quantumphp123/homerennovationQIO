<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function userdetail()
    {
        if(!auth()->check()){
            return response()->json([
                'status' => 'error',
                'errors' => 'Please login first!',
            ], 400);
        }else{
            $user = User::find(auth()->user()->id);
            $data=array();
            $data['name']=$user->name;
            $data['id']=$user->id;
            $data['email']=$user->email;
            $data['profile_pic']=url( 'images/' . $user->profile_pic_path . '/' . $user->profile_pic);
            return response()->json([
                'status' => 'success',
                'user' => $data,
            ], 200);
        }
        
        // if (!User::find($request->id)) {
        //     return response()->json([
        //         'status' => 'error',
        //         'message' => 'No user found of this id',
        //     ], 401);
        // }

        
    }
}