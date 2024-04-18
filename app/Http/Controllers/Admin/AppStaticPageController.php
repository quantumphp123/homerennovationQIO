<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\AppStaticPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AppStaticPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appstaticpages = AppStaticPage::all();
        return view('admin.appstaticpage.index', compact('appstaticpages'));
        // your code here
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.appstaticpage.create');
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
            'type'=>['required', 'string'],
            'content' => ['required', 'string'],
        ])->validate();

        AppStaticPage::create([
            'type' => $request->type,
            'content' => $request->content,
        ]);
        return redirect()->route('appstaticpage.index')->with('success', 'New app static page added successfully!');
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
    public function edit(AppStaticPage $appstaticpage)
    {
         return view('admin.appstaticpage.edit',compact('appstaticpage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,AppStaticPage $appstaticpage)
    {
        Validator::make($request->all(), [
            'type'=>['required', 'string'],
            'content' => ['required', 'string'],
        ])->validate();
        
        $appstaticpage->type = $request->type;
        $appstaticpage->content = $request->content;
        $appstaticpage->save();
        return redirect()->route('appstaticpage.index')->with('success', 'App Static Page Information updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AppStaticPage $appstaticpage)
    {
        $appstaticpage->delete();
        return redirect()->back()->with('success','App Static Page deleted successfully!');
    }
}

