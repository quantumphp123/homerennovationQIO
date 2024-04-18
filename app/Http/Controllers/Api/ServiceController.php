<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function services(Request $request)
    {
       $services=Service::all();
       foreach($services as $service){
                $service['image']=url( 'images/' . $service->image_path . '/' . $service->image);
                unset($service["image_path"]);
                unset($service["created_at"]);
                unset($service["updated_at"]);
            }
       return response()->json([
        'status' => 'The services are as follows',
        'service' => $services,
    ], 200);
    }
}
