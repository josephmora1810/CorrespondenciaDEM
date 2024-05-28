@extends('layoutdashboard')
@section('title','Bitacora')
@section('content')
                <!-- BEGIN: Content -->
                <div class="content">
                    <!-- <div class="grid grid-cols-12 gap-6"> -->
                        <div class="col-span-12 mt-6 -mb-6 intro-y">
                            <div class="alert alert-dismissible show box bg-theme-26 text-white flex items-center mb-6" role="alert">
                                <span>Aplicación / Sistema de Correspondencia / Bitacora</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x w-4 h-4"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg> </button>
                            </div>
                        </div>
                        <div class="col-span-12 xxl:col-span-9">
                            <!-- <div class="grid grid-cols-12 gap-6"> -->
                                <!-- BEGIN: General Report -->
                                <div class="col-span-12 mt-8">
                                    
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-12 intro-y">
                                         <div class="report-box intro-y mt-12 sm:mt-5">
                                            <div class="box sm:flex">
                                                <div class="px-12 py-12 flex flex-col justify-center flex-1">     
                                                    <div class="flex flex-wrap -mx-6">
        				<div class="bg-white pb-4 px-4 rounded-md w-full"  style="text-align: center;">

                            <button type="button" class="btn btn-primary btn-circle btn-xl" style="margin-right: 10%;"><i data-feather="download"></i></button>

                            <button type="button" class="btn btn-warning btn-circle btn-xl"><i data-feather="upload"></i>
                            </button>

                        </div>
                        


                        


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: General Report -->
                            <!-- </div> -->
                        </div>
                    <!-- </div> -->
                </div>
                <!-- END: Content -->
@endsection
