<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class PortfolioController extends Controller
{
    public function portfolios(Request $request)
    {
       $portfolios=Portfolio::all();
       foreach($portfolios as $portfolio){
                $portfolio['portfolio_title']=$portfolio['title'];
                unset($portfolio["title"]);
                $portfolio['portfolio_description']=$portfolio['description'];
                unset($portfolio["description"]);
                $portfolio['image']=url( 'images/' . $portfolio->image_path . '/' . $portfolio->image);
                unset($portfolio["image_path"]);
                unset($portfolio["created_at"]);
                unset($portfolio["updated_at"]);
            }
       return response()->json([
        'status' => 'The portfolios are as follows',
        'portfolio' => $portfolios,
    ], 200);
    }
}
