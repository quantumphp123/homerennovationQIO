<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ProductController extends Controller
{
    public function productdetails()
    {
       $data=array();
       $categories=Category::all();
       foreach ($categories as $category){
            $products=Product::where('category_id', $category->id)->get();
            $data2=array();
            $data2['id']= $category->id;
            $data2['category_name']= $category->name;
             foreach($products as $product){
                $product['product_title']=$product['name'];
                unset($product["name"]);
                $product['product_image']=url( 'images/' . $product->image_path . '/' . $product->image);
                unset($product["image_path"]);
                unset($product["category_id"]);
                unset($product["created_at"]);
                unset($product["updated_at"]);
                unset($product["image"]);
            }
            $data2['products']= $products;
            $data[]=$data2;
       }
       return response()->json([
        'status' => 'Product Data is as follows',
        'product' => $data,
    ], 200);
    }
}
