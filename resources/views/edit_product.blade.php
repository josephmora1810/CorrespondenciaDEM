@extends('layoutdashboard')
@section('content')
        <!-- BEGIN: Notification -->
        <div class="col-span-12 mt-6 -mb-6 intro-y">
            <div class="alert alert-dismissible show box bg-theme-26 text-white flex items-center mb-6" role="alert">
                <span>Dashboard /  Product </span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x w-4 h-4"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg> </button>
            </div>
        </div>
        <!-- END: Notification -->
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Product
            </h2>
        </div>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 lg:col-span-12">
            <form method="post" action="{{route('product.update')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" class="form-control" name="id" value="{{$product->id}}">
                <!-- BEGIN: Form Layout -->
                <div class="intro-y box p-5">                    
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Select Category</label>
                        <select data-placeholder="Select Category" class="tail-select w-full" id="crud-form-2" name="ddcategory">
                        <option value="0" selected>---Select Category---</option>
                        @foreach($product['data'] as $list)
                            <option value="{{$list->id}}" {{$product->category_name == $list->id  ? 'selected' : ''}}>{{$list->category_name}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-2" class="form-label">Select SubCategory</label>
                        <select data-placeholder="Select Subcategory" class="tail-select w-full" id="crud-form-2" name="ddsubcategory">
                            <option value="0" selected>---Select Subcategory---</option>
                            @foreach($product['data1'] as $list1)
                                <option value="{{$list1->id}}" {{$product->subcategory_name == $list1->id  ? 'selected' : ''}}>{{$list1->subcategory_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div  class="mt-3">
                        <label for="crud-form-1" class="form-label">Products Name</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" value="{{$product->product_name}}" placeholder="Product Name" name="product_name">
                    </div>
                    <div  class="mt-3">
                        <label for="crud-form-1" class="form-label">Product Code</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Product Code" value="{{$product->product_code }}" name="product_code">
                    </div>
                    <div  class="mt-3">
                        <label for="crud-form-1" class="form-label">Product Price</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" value="{{$product->product_price}}"placeholder="Product Price" name="product_price">
                    </div>
                    <div  class="mt-3">
                        <label for="crud-form-1" class="form-label">Product Model</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Product Model" value="{{$product->product_model}}" name="product_model">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Availability</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" value="{{$product->availability}}" placeholder="Availability" name="availability">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-3" class="form-label">Product Quantity</label>
                        <div class="input-group">
                            <input id="crud-form-3" type="text" class="form-control" placeholder="Product Quantity" value="{{$product->product_quantity}}"aria-describedby="input-group-1" name="product_quantity">
                            
                        </div>
                    </div>
                    <div class="mt-3">
                        <label>Product Description</label>
                        <div class="mt-2">
                            <div class="editor" name="product_description" value="{{$product->product_description}}">
                                <p>Product Description</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-3" class="form-label">Product Features</label>
                        <div class="input-group">
                            <input id="crud-form-3" type="text" class="form-control" placeholder="Product Features" aria-describedby="input-group-1" name="product_features" value="{{$product->product_features}}">
                            
                        </div>
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-3" class="form-label">Add Product Images</label>
                        <div class="input-group">
                            <input id="crud-form-3" type="file" class="form-control" accept="image/*" placeholder="Product Image" aria-describedby="input-group-1" name="product_image" value="{{$product->product_image}}">
                            
                        </div>
                        <img id="output" width="150px" height="120px" src="{{url('/uploads')}}/{{$product->product_image}}">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-3" class="form-label">Keyword</label>
                        <div class="input-group">
                            <input id="crud-form-3" type="text" class="form-control" placeholder="Keywords" value="{{$product->keyword}}" aria-describedby="input-group-1" name="keyword">
                            
                        </div>
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-3" class="form-label">Page Desc</label>
                        <div class="input-group">
                            <input id="crud-form-3" type="text" class="form-control" value="{{$product->page_description}}" placeholder="Page Desc" aria-describedby="input-group-1" name="page_desc">                            
                        </div>
                    </div>
                    <!-- <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Select Product-1</label>
                        <select data-placeholder="Select Products" class="tail-select w-full" id="crud-form-2" >
                            <option value="1" selected>---Select Product-1---</option>
                            <option value="1">Product-1</option>
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-2" class="form-label">Select Product-2</label>
                        <select data-placeholder="Select Products" class="tail-select w-full" id="crud-form-2" >
                        <option value="1" selected>---Select Product-2---</option>
                            <option value="1">Product-1</option>
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Select Product-3</label>
                        <select data-placeholder="Select Products" class="tail-select w-full" id="crud-form-2" >
                        <option value="1" selected>---Select Product-3---</option>
                            <option value="1">Product-1</option>
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-2" class="form-label">Select Product-4</label>
                        <select data-placeholder="Select Products" class="tail-select w-full" id="crud-form-2" >
                        <option value="1" selected>---Select Product-4---</option>
                            <option value="1">Product-1</option>
                        </select>
                    </div> -->
                    <div class="text-right mt-5">
                         <input class="btn btn-primary w-24" type="submit" value="Submit">
                    </div>
                </div>
                <!-- END: Form Layout -->
            </form>
            </div>
        </div>

@endsection