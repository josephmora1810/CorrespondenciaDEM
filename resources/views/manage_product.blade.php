@extends('layoutdashboard')
@section('content')

<div class="content">
   <!-- BEGIN: Notification -->
   <div class="col-span-12 mt-6 -mb-6 intro-y">
      <div class="alert alert-dismissible show box bg-theme-26 text-white flex items-center mb-6" role="alert">
         <span>Dashboard /  Products </span>
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
         <i data-feather="x"></i>
         </button>
      </div>
   </div>
   <!-- BEGIN: Notification -->
   <!-- BEGIN: General Report -->
   <div class="col-span-12 lg:col-span-8 xl:col-span-6 mt-2">
      <div class="intro-y block sm:flex items-center h-10">
         <h2 class="text-lg font-medium truncate mr-5">
            Products
         </h2>
      </div>
      <div class="report-box-2 intro-y mt-12 sm:mt-5">
         <div class="box sm:flex">
            <div class="px-12 py-12 flex flex-col justify-center flex-1 border-t sm:border-t-0 sm:border-l border-gray-300 dark:border-dark-5 border-dashed">
               <div class="mt-1.5 flex items-center">
                  <table class="table">
                     <thead>
                        <tr class="bg-gray-700 dark:bg-dark-1 text-white">
                           <th class="whitespace-nowrap">S.No</th>
                           <th class="whitespace-nowrap">Product Name</th>
                           <th class="whitespace-nowrap">Product Model</th>
                           <th class="whitespace-nowrap">category </th>
                           <th class="whitespace-nowrap">Sub Category</th>
                           <th class="whitespace-nowrap">Product Image</th>
                           <th class="whitespace-nowrap">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                     @foreach($data_product as $list_product)
                        <tr>
                           <td class="border-b dark:border-dark-5">{{$list_product->id}}</td>
                           <td class="border-b dark:border-dark-5">{{$list_product->product_name}}</td>
                           <td class="border-b dark:border-dark-5">{{$list_product->product_model}}</td>
                           <td class="border-b dark:border-dark-5">{{$list_product->category_name}}</td>
                           <td class="border-b dark:border-dark-5">{{$list_product->subcategory_name}}</td>
                           <td class="border-b dark:border-dark-5">
                              <center><img src="{{url('/uploads')}}/{{$list_product->product_image}}" width="90px" height="70px" alt="1646244835.jpg"></center>
                           </td>
                           <td class="border-b dark:border-dark-5">
                              <a href="{{url('editproduct')}}/{{$list_product->id}}">
                              <i data-feather="edit" style="color:green;"></i>
                              </a>
                              <a onclick="return confirm('Do You want to delete it')" href="{{url('/mng_products/destroy')}}/{{$list_product->id}}">
                                 <i data-feather="delete" style="color:red;"></i>
                              </a>
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- END: General Report -->
</div>

@endsection