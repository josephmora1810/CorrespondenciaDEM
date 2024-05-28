@extends('layoutdashboard')
@section('title','Enviar Documento')
@section('content')
                <!-- BEGIN: Content -->
                <div class="content">
                    <!-- <div class="grid grid-cols-12 gap-6"> -->
                        <div class="col-span-12 mt-6 -mb-6 intro-y">
                            <div class="alert alert-dismissible show box bg-theme-26 text-white flex items-center mb-6" role="alert">
                                <span>Aplicación / Sistema de Correspondencia / Enviar Documento</span>
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
                                                    <div class="grid place-items-center">
        				<div class="grid place-items-center">
     <!-- CODIGO DE LA DATATABLE  -->
<form action="{{route('mail.store')}}" method="POST" class="w-full max-w-lg ">
    @csrf
  <div class="flex  -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Numero del Documento
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="numerodocu" type="text" placeholder="Ingrese un Numero">
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Dirigido a:
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="dirigidoa" type="text" placeholder="El documento va dirigido">
    </div>
  </div>

  <div class="grid place-items-center">
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
        Operador
      </label>
      <div class="relative">
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="operator_id">
            <option selected disabled>Elija una opcion</option>
            @foreach($operators as $ope)
            <option value="{{$ope->id}}"> {{$ope->nombre }} </option>
            @endforeach         
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
        Documento
      </label>
      <div class="relative">
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="categoria_id">
            <option selected disabled>Elija una opcion</option>
            @foreach($Categorias as $cate)
                <option value="{{$cate->id}}"> {{$cate->nombre }} </option>
            @endforeach 
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Enviar Documento</button>
  </div>
</form>

<!-- FIN CODIGO DATATABLE-->

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
