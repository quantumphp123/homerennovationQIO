<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class ClientController extends Controller
{
    public function addclientinfo(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'full_name' => 'required|string',
                'email' => 'required|string|email|max:255',
                'phone' => 'required|numeric|digits:10',
                'site_address' => 'required|string|',
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'status' => 'error',
                'errors' => $e->errors(),
            ], 400);
        }
        $client=new Client();
        $client->name=request('full_name');
        $client->email=request('email');
        $client->phone=request('phone');
        $client->user_id=auth()->user()->id;
        $client->site_address=request('site_address');
        $client->save();
        return response()->json([
            'status' => 'Client details added successfully',
        ], 401);
    }
}
