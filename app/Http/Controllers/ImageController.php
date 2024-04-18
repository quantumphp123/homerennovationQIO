<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function show($path)
    {
        if(Storage::disk('images')->exists($path)){
            $local_path = config('filesystems.disks.images.root') . DIRECTORY_SEPARATOR . $path;
            return response()->file($local_path);
        } else {
            return response("File not found", 404);
        }
    }
}
