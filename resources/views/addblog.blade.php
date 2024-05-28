@extends('layoutdashboard')
@section('content')
        <!-- BEGIN: Notification -->
        <div class="col-span-12 mt-6 -mb-6 intro-y">
            <div class="alert alert-dismissible show box bg-theme-26 text-white flex items-center mb-6" role="alert">
                <span>Dashboard /  Blog </span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> 
                    <i data-feather="x"></i>
                </button>
            </div>
        </div>
        <!-- END: Notification -->
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Blog
            </h2>
        </div>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 lg:col-span-12">
                <!-- BEGIN: Form Layout -->
                <div class="intro-y box p-5">                    
                    <div >
                        <label for="crud-form-3" class="form-label">Add Blog Title</label>
                        <div class="input-group">
                            <input id="crud-form-3" type="text" class="form-control" placeholder="Blog Title" aria-describedby="input-group-1">                            
                        </div>
                    </div>
                    <div >
                        <label>Add Blog Desc</label>
                        <div class="mt-2">
                            <div class="editor">
                                <p>Product Description</p>
                            </div>
                        </div>
                    </div>
                    <div >
                        <label for="crud-form-3" class="form-label">Add Blog Image</label>
                        <div class="input-group">
                            <input id="crud-form-3" type="file" class="form-control" accept="image/*" placeholder="Blog Image" aria-describedby="input-group-1">
                        </div>
                        <img id="output" width="150px" height="120px">
                    </div>
                    <div class="text-right mt-5">
                        <button type="button" class="btn btn-primary w-24">Save</button>
                    </div>
                </div>
                <!-- END: Form Layout -->
            </div>
        </div>

@endsection