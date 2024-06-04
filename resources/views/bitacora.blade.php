@extends('layoutdashboard')
@section('title','Bitacora')
@section('content')
       <!-- BEGIN: Notification -->
        <div class="col-span-12 mt-6 -mb-6 intro-y">
            <div class="alert alert-dismissible show box bg-theme-26 text-white flex items-center mb-6" role="alert">
                <span>Dashboard /  Usuarios Registrados </span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x w-4 h-4"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg> </button>
            </div>
        </div>
        <!-- END: Notification -->
        <!-- BEGIN: General Report -->
        <div class="col-span-12 lg:col-span-8 xl:col-span-6 mt-2">
            <div class="intro-y block sm:flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    Usuarios Registrados 
                </h2>
            </div>
            <a href="{{ route('bitacora.pdf') }}" class="btn btn-primary btn-lg"><i data-feather="mail"></i>->Imprimir Bitacora</a>

            <div class="report-box-2 intro-y mt-12 sm:mt-5">

                <div class="box sm:flex">
                    
                    <div class="px-12 py-12 flex flex-col justify-center flex-1 border-t sm:border-t-0 sm:border-l border-gray-300 dark:border-dark-5 border-dashed">
                        <div class="mt-1.5 flex items-center">
                        <table class="table">
                            <thead>
                                <tr class="bg-gray-700 dark:bg-dark-1 text-white">
                                    <th class="whitespace-nowrap">ID</th>
                                    <th class="whitespace-nowrap">Nombre</th>
                                    <th class="whitespace-nowrap">Correo</th>
                                    <th class="whitespace-nowrap">Realizado por</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                            @foreach($bitacoras as $bitacora)
                                <tr>
                                    <td class="border-b dark:border-dark-5">{{$bitacora->id}}</td>
                                    <td class="border-b dark:border-dark-5">{{$bitacora->accion}}</td>
                                    <td class="border-b dark:border-dark-5">{{$bitacora->updated_at}}</td>
                                    <td class="border-b dark:border-dark-5">{{$bitacora->user->name}}</td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        </div>
                        <div>{{ $bitacoras ?? ''->links() }}</div>
                    </div>
                </div>

            </div>

        </div>
        <!-- END: General Report -->

@endsection
