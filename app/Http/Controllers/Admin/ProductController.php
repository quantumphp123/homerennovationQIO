<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
        // your code here
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // your code here
        Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'image' => ['required'],
        ])->validate();
        
        $image_path="";
        $image="";
        if($request->has('image')){
            $image_path = $request->file('image')->store('product_image', 'images');
            $image = explode('/', $image_path);
        }

        Product::create([
            'name' => $request->name,
            'image_path' => 'product_image',
            'image' => $image[1],
            'category_id' => $request->category,
        ]);
        return redirect()->route('product.index')->with('success', 'New Product added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
    public function edit(Product $product)
    {
        $categories=Category::all();
        return view('admin.product.edit',compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Product $product)
    {
        Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'image' => [],
        ])->validate();
        
        if($request->has('image')){
            $image='';
            $image_path = $request->file('image')->store('product_image', 'images');
            $image = explode('/', $image_path);
            $product->image = $image[1];
        }
        
        $product->name = $request->name;
        $product->category_id = $request->category;
        $product->save();
        return redirect()->route('product.index')->with('success', 'Product Information updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        // your code here
        $product->delete();
        return redirect()->back()->with('success','Product deleted successfully!');
    }
}
