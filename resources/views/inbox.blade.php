@extends('layoutdashboard')
@section('title','Bandeja de Entrada')
@section('content')
                <!-- BEGIN: Content -->
                <div class="content">
                    <!-- <div class="grid grid-cols-12 gap-6"> -->
                        <div class="col-span-12 mt-6 -mb-6 intro-y">
                            <div class="alert alert-dismissible show box bg-theme-26 text-white flex items-center mb-6" role="alert">
                                <span>Aplicación / Sistema de Correspondencia / Buzón de Entrada</span>
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
        				<div class="bg-white pb-4 px-4 rounded-md w-full">
     <!-- CODIGO DE LA DATATABLE  -->
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <h2 class="text-2xl font-bold mb-4">Buzón de entrada</h2>
    
                    <table class="table table-hover mails">
                        
                        <tbody>
                            <tr>
                                @foreach ($documentos  as $document)
                                <!--<td class="mail-select">
                                    {{ $document->id }}
                                </td>
                            -->
                                <td class="mail-rateing">
                                    <i class="fa fa-star">{{$document->user->name}}</i>
                                </td>
                                <td>
                                    <a href="##email-read.html">{{$document->user->email}}</a>
                                </td>
                                <td>
                                    <a href="##email-read.html">{{ $document->categoria->nombre }}</a>
                                </td>
                                <td>
                                    {{$document->updated_at}}

                                </td>
                                <td class="text-right">
                                    <label class="cr-styled">
                                        <a href="{{url('/inbox/pdf/')}}/{{$document->id}}">
                                        <i data-feather="eye" style="color:#063970;"></i>
                                    </a>
                                    |

                                    <a onclick="return confirm('¿Seguro de que quieres elliminar?')" href="{{url('/inbox/destroy/')}}/{{$document->id}}">
                                        <i data-feather="delete" style="color:#54160b;"></i>
                                    </a>

                                    </label>
                                </td>
                            </tr>
                            @endforeach
                    
                        </tbody>
                    </table>
           {{ $documentos ?? ''->links() }}
</div>

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
