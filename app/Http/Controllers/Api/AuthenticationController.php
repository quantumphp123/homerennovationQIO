<?php

namespace App\Http\Controllers\Api;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use DB;

class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'email' => 'required|string|email|max:255',
                'password' => 'required|string',
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'status' => 'error',
                'errors' => $e->errors(),
            ], 400);
        }

        if (!Auth::attempt($validatedData)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Invalid email or password',
            ], 401);
        }

        $user = Auth::user();

        if($user->role_id === 1){
            Auth::logout();
            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorised access.',
            ], 401);
        }
        if($user->status == 0){
            Auth::logout();
            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorised access.',
            ], 401);
        }
        $token = $user->createToken('authToken')->accessToken;
        $user['profile_pic']=url( 'images/' . $user->profile_pic_path . '/' . $user->profile_pic);
        unset($user["profile_pic_path"]);
        unset($user["created_at"]);
        unset($user["updated_at"]);
        unset($user["role_id"]);
        unset($user["status"]);
        unset($user["email_verified_at"]);
        return response()->json([
            'status' => 'success',
            'user' => $user,
            'token' => $token,
        ], 200);
    }
    
    public function forget_password(Request $request){
        try {
            $validatedData = $request->validate([
                'email' => 'required|string|email|max:255',
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'status' => 'error',
                'errors' => $e->errors(),
            ], 400);
        }
        
        $user=User::where('email', $request->email)->first();
        if($user){
            $user->reset_password_request=1;
            $user->save();
            return response()->json([
                'status' => 'success',
                'message' => 'Request to reset password send successfully',
            ], 200);
        }
        else{
            return response()->json([
                'status' => 'error',
                'message' => 'No such user exist',
            ], 400);
        }
    }
}
