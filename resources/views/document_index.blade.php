@extends('layoutdashboard')
@section('title','Nuevo Documento')
@section('content')
        <!-- BEGIN: Notification -->
        <div class="col-span-12 mt-6 -mb-6 intro-y">
            <div class="alert alert-dismissible show box bg-theme-26 text-white flex items-center mb-6" role="alert">
                <span>Dashboard /  Nuevo Documento </span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x w-4 h-4"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg> </button>
            </div>
        </div>
        <!-- END: Notification -->
        <!-- BEGIN: General Report -->
        <div class="col-span-12 lg:col-span-8 xl:col-span-6 mt-2">
            <div class="intro-y block sm:flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    Documento Nuevo 
                </h2>
            </div>
            <div class="report-box-2 intro-y mt-12 sm:mt-5">
                <div class="box sm:flex">
                    <div class="px-8 py-12 flex flex-col flex-1">
                        <form method="POST" action="{{ route('store.document') }}">
                        @csrf
                       
                        <div class="mt-3"> 
                            <label for="vertical-form-1" class="form-label">Nombre</label> 
                            <input name="nombre" type="text" class="form-control" placeholder="Añadir Nombre del Documento"> 
                            @error('nombre')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mt-3"> 
                            <label for="vertical-form-1" class="form-label">Cuerpo</label> 
                            <textarea name="cuerpo" type="text" class="form-control" placeholder="Añadir cuerpo del Documento" rows="6"></textarea>
                            @error('cuerpo')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Submit</button>
                            <br><br>
                            <div style="text-align: center;color:green">
                            </div>
                            <input type="hidden" name="id" value="">
                        </div>
                        </form>
                        <div class="relative text-3xl font-bold mt-12 pl-4"> <span class="absolute text-xl top-0 left-0"></span></div>
                    </div>
                    <div class="px-8 py-12 flex flex-col justify-center flex-1 border-t sm:border-t-0 sm:border-l border-gray-300 dark:border-dark-5 border-dashed">
                        <div class="mt-1.5 flex items-center">
                        <table class="table">
                            <thead>
                                <tr class="bg-gray-700 dark:bg-dark-1 text-white">
                                    <th class="whitespace-nowrap">N°</th>
                                    <th class="whitespace-nowrap">Nombre</th>
                                    <th class="whitespace-nowrap">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                            @foreach($categoria as $cate)
                                <tr>
                                    <td class="border-b dark:border-dark-5">{{$cate->id}}</td>
                                    <td class="border-b dark:border-dark-5">{{$cate->nombre}}</td>
                                    <td class="border-b dark:border-dark-5">
                                    <a href="{{url('editcat')}}/{{$cate->id}}">
                                        <i data-feather="edit" style="color:green;"></i>
                                    </a>
                                    |
                                    <a onclick="return confirm('Do you want to delete it')" href="{{url('/cat/destroy/')}}/{{$cate->id}}">
                                        <i data-feather="delete" style="color:red;"></i>
                                    </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                    {{ $categoria ?? ''->links() }}
                </div>
            </div>
        </div>
        <!-- END: General Report -->

@endsection
