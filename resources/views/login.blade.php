@extends('layout')
@section('container')
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Login Info  xsxs -->
                <div class="hidden xl:flex flex-col min-h-screen">
                    <a href="" class="-intro-x flex items-center pt-5">
                        <img alt="Icewall Tailwind HTML Admin Template" class="w-8" src="{{asset('dist/images/tsjw.png')}}">
                        <span class="text-white text-lg ml-3"> <span class="font-medium" style="text-align: justify;">Tribunal Supremo de Justicia</span> </span>
                    </a>
                    <div class="my-auto">
                        <img alt="Icewall Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="{{asset('dist/images/DEM.png')}}">
                        <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                            Sistema Administrativo
                            <br>
                            de Correspondencia
                        </div>
                        <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-gray-500"></div>
                    </div>
                </div>
                <!-- END: Login Info -->
                <!-- BEGIN: Login Form -->
                
                <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-dark-1 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                        <form action="{{route('users.in')}}" method="POST">
                            @csrf
                            
                        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                            Inicio de Sesión
                        </h2>
                        <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">Unos cuantos clicks mas para ingresar a tu cuenta. Administra todos los documentos</div>
                        <div class="intro-x mt-8">
                            <input type="email" name="email" class="intro-x login__input form-control py-3 px-4 border-gray-300 block" placeholder="Ingrese su E-mail">
                            <input type="password" name="password" class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-4" placeholder="Ingrese su Contraseña">
                        </div>
                        <div class="intro-x flex text-gray-700 dark:text-gray-600 text-xs sm:text-sm mt-4">
                            <div class="flex items-center mr-auto">
                                <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                                <label class="cursor-pointer select-none" for="remember-me">Recordar Contraseña</label>
                            </div>
                            <a href="register">¿Olvidaste tu contraseña?</a> 
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button type="submit" class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Ingresar</button>
                        </div>
                          </form>

                        
                    </div>
                </div>
                              <!-- END: Login Form -->
            </div>
       @endsection