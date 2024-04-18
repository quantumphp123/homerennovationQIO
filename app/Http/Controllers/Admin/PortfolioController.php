<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
    */
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('admin.portfolio.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
    */
    public function create()
    {
        return view('admin.portfolio.create');
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
        
       
        if($request->has('image')){
            $image_path = $request->file('image')->store('portfolio_image', 'images');
            $image = explode('/', $image_path);
        }

        Portfolio::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image[1],
            'image_path' => 'portfolio_image',
        ]);
        return redirect()->route('portfolio.index')->with('success', 'New Portfolio added successfully!');
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
    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolio.edit',compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Portfolio $portfolio)
    {
        Validator::make($request->all(), [
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'image' => [],
        ])->validate();
        
        if($request->has('image')){
            $image_path = $request->file('image')->store('portfolio_image', 'images');
            $image = explode('/', $image_path);
            $portfolio->image = $image[1];
        }
        
        $portfolio->title = $request->title;
        $portfolio->description = $request->description;
        $portfolio->save();
        return redirect()->route('portfolio.index')->with('success', 'Portfolio Information updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return redirect()->back()->with('success','Portfolio deleted successfully!');
    }
}
