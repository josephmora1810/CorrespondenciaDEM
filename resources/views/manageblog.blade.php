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
                           <th class="whitespace-nowrap">Title</th>
                           <th class="whitespace-nowrap">Desc.</th>
                           <th class="whitespace-nowrap">Image</th>
                           <th class="whitespace-nowrap">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td class="border-b dark:border-dark-5">1</td>
                           <td class="border-b dark:border-dark-5">Blogs 1</td>
                           <td class="border-b dark:border-dark-5"><p>sdjkgbjd gsdkfldsf</p></td>
                           <td class="border-b dark:border-dark-5">
                              <center><img src="{{asset('dist/images/1646244867.jpg')}}" width="90px" height="70px" alt="1646244835.jpg"></center>
                           </td>
                           <td class="border-b dark:border-dark-5">
                              <a href="{{route('edit_blog')}}">
                              <i data-feather="edit" style="color:green;"></i>
                              </a>
                              <a onclick="return confirm('Do You want to delete it')" href="#">
                                 <i data-feather="delete" style="color:red;"></i>
                              </a>
                           </td>
                        </tr>
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