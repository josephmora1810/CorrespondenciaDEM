<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = new category();
        $result['data'] = category::all(); // without Facades
        return view('addcategory',$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cat_name' => 'required'
        ]);
        $model = new category(); // model name;
        $model->category_name = $request->post('cat_name');
        $model->save();
        $result['data']= category::all(); 
        return view('addcategory',$result);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        $result['data'] = category::all(); // without Facades
        return view('addcategory',$result);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category,$id)
    {
        $cat = category::find($id);
        return view('edit_category',compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        $model = category::find($request->id); //  Model Name;
        $model->category_name = $request->post('category_name'); ;
        $model->save();
      
        $result['data'] = category::all(); // without Facades
        return view('addcategory',$result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category, $id)
    {
        $model= new category();
        $model= category::find($id);
        $model->delete();
        $result['data']= category::all(); 
        return view('addcategory',$result);
    }
}
