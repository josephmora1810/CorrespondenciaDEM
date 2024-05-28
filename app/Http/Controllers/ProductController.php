<?php

namespace App\Http\Controllers;

use App\Models\subcategory;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model= new subcategory();
        $model= new product();
        $result['data_category'] = category::all();
        $result['data_subcategory'] = subcategory::join('categories','categories.id', '=', 'subcategories.category_name')
                 ->get(['subcategories.subcategory_name','subcategories.id','categories.category_name']);
        $result['data_product'] = product::join('categories','categories.id', '=', 'products.category_name')->join('subcategories','subcategories.id', '=', 'products.subcategory_name')
                ->get(['products.*', 'subcategories.subcategory_name', 'categories.category_name']);
        return view('addproduct',$result);
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
        $model= new product();

        $model->category_name = $request->post('ddcategory');
        $model->subcategory_name = $request->post('ddsubcategory');
        $model->page_description = $request->post('page_desc');
        $model->keyword = $request->post('keyword');
        $model->product_features = $request->post('product_features');
        $model->product_quantity = $request->post('product_quantity');
        $model->availability = $request->post('availability');
        $model->product_model = $request->post('product_model');
        $model->product_price = $request->post('product_price');
        $model->product_code = $request->post('product_code');
        $model->product_name = $request->post('product_name');
        $model->product_description = $request->post('product_description');
        if($request->hasFile('product_image'))
        {
            $image = $request->file('product_image');
            $ext = $image->extension();
            $image_name = time().'.'.$ext;
            $destinationPath = public_path('/uploads/');
            $image->move($destinationPath, $image_name);
        }
        $model->product_image = $image_name;
        $model->save(); 
        $model= new product();
        $result['data_product'] = product::join('categories','categories.id', '=', 'products.category_name')->join('subcategories','subcategories.id', '=', 'products.subcategory_name')
                 ->get(['products.*', 'subcategories.subcategory_name', 'categories.category_name']);
                //  print_r($this->db(last_query)); die;
        return view('manage_product',$result);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        $model= new product();
        $result['data_product'] = product::join('categories','categories.id', '=', 'products.category_name')->join('subcategories','subcategories.id', '=', 'products.subcategory_name')
                 ->get(['products.*', 'subcategories.subcategory_name', 'categories.category_name']);
        return view('manage_product',$result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product,$id)
    {
        $product = product::find($id);
        $product['data'] = category::all();
        $product['data1'] = subcategory::join('categories','categories.id', '=', 'subcategories.category_name')
                 ->get(['subcategories.subcategory_name','subcategories.id','categories.category_name']);
        $product['data_product'] = product::join('categories','categories.id', '=', 'products.category_name')->join('subcategories','subcategories.id', '=', 'products.subcategory_name')->get(['products.*', 'subcategories.subcategory_name', 'categories.category_name']);
        return view('edit_product',compact('product'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        $model = product::find($request->id); //  Model Name;
        $model->category_name = $request->post('ddcategory');
        $model->subcategory_name = $request->post('ddsubcategory');
        $model->page_description = $request->post('page_desc');
        $model->keyword = $request->post('keyword');
        $model->product_features = $request->post('product_features');
        $model->product_quantity = $request->post('product_quantity');
        $model->availability = $request->post('availability');
        $model->product_model = $request->post('product_model');
        $model->product_price = $request->post('product_price');
        $model->product_code = $request->post('product_code');
        $model->product_name = $request->post('product_name');
        $model->product_description = $request->post('product_description');
        if($request->hasFile('product_image'))
        {
            $image = $request->file('product_image');
            $ext = $image->extension();
            $image_name = time().'.'.$ext;
            $destinationPath = public_path('/uploads/');
            $image->move($destinationPath, $image_name);
        }
        $model->product_image = $image_name;
        $model->save();
      
        $model= new product();
        $result['data_product'] = product::join('categories','categories.id', '=', 'products.category_name')->join('subcategories','subcategories.id', '=', 'products.subcategory_name')
                 ->get(['products.*', 'subcategories.subcategory_name', 'categories.category_name']);
        return view('manage_product',$result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product,$id)
    {
        //
        $model= new product();
        $model= product::find($id);
        $model->delete();
        $result['data_product'] = product::join('categories','categories.id', '=', 'products.category_name')->join('subcategories','subcategories.id', '=', 'products.subcategory_name')
                 ->get(['products.*', 'subcategories.subcategory_name', 'categories.category_name']);
        return view('manage_product',$result); 
    }
}
