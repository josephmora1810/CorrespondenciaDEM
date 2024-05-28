@extends('layoutdashboard')
@section('content')
        <!-- BEGIN: Notification -->
        <div class="col-span-12 mt-6 -mb-6 intro-y">
            <div class="alert alert-dismissible show box bg-theme-26 text-white flex items-center mb-6" role="alert">
                <span>Dashboard /  Sub Category </span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x w-4 h-4"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg> </button>
            </div>
        </div>
        <!-- END: Notification -->
        <!-- BEGIN: General Report -->
        <div class="col-span-12 lg:col-span-8 xl:col-span-6 mt-2">
            <div class="intro-y block sm:flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    Sub Category 
                </h2>
            </div>
            <div class="report-box-2 intro-y mt-12 sm:mt-5">
                <div class="box sm:flex">
                    <div class="px-8 py-12 flex flex-col flex-1">
                        <form method="post" action="{{route('subcategory.update')}}">
                            <!-- <input type="hidden" name="_token" value="6Ldd7PNeo17vptphd3D8u1jUy127s9xlMffdS4bY"> -->
                            @csrf
                            
                            <input type="hidden" class="form-control" name="id" value="{{$subcat->id}}">
                            <div> 
                                <label for="vertical-form-1" class="form-label">Select Category name</label> <select id="category_name" name="category_name" required="" class="form-control">
                                        <option value="0">----Select Category----</option>
                                        @foreach($subcat['data'] as $list)
                                            <option value="{{$list->id}}" {{$subcat->category_name == $list->id  ? 'selected' : ''}}>{{$list->category_name}}</option>
                                        @endforeach
                                </select>
                            </div>
                            
                            <div> 
                                <label for="vertical-form-1" class="form-label">Add Sub Category name</label> <input id="sub_category_name" name="subcategory_name" value="{{$subcat->subcategory_name}}" type="text" required="" class="form-control" placeholder="Add Sub Category">
                            </div>
                            <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                                <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Submit</button>
                                <br><br>
                                <div style="text-align: center;color:green">
                            </div>
                            </div>
                        </form>
                        <div class="relative text-3xl font-bold mt-12 pl-4"> 
                            <span class="absolute text-xl top-0 left-0"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: General Report -->

@endsection