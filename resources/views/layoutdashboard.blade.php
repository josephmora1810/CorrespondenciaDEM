<!DOCTYPE html>

<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{asset('dist/images/DEM.png')}}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="tsj, correspondencia, unefa">
        <meta name="author" content="joseph">
        <title>@yield('title')</title>
        <!-- BEGIN: CSS Assets-->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('dist/css/app.css')}}" />
        <link rel="stylesheet" href="{{asset('dist/css/inbox.css')}}" />
        <link rel="stylesheet" href="{{asset('dist/css/modales.css')}}" />
        <link rel="stylesheet" href="{{asset('dist/css/modalesbotones.css')}}" />
        <!-- END: CSS Assets-->

        
    </head>
    <!- END: Head -->
    <body class="main">

<!--PRIMERA VENTANA MODAL DIRIGIDA A LA CREACIÓN DE UN NUEVO USUARIO-->
<input type="checkbox" id="btn-modal">
    <div class="container-modal">
        <div class="content-modal" style='text-align: center;'>
            <p class="h1">Crear un nuevo Usuario</p>
            <br>
            <br>

            <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
                
                @csrf <!-- Esto es para hacer un token-->



<!--ESTO ES PARA VALIDAR ACDA DATO-->

                <div class="mb-3">
                    <label for="InputUser1" class="form-label" style="text-align: left;">Nombre de Usuario</label>
                    <input type="text" class="form-control" id="Username" name="Username" placeholder="Ingresa un UserName (sin carácteres especiales)" value="{{old('Username')}}">
                </div>
                <div class="mb-3">
                    <label for="InputEmail1" class="form-label" style="text-align: left;">Correo Electrónico</label>
                    <input type="text" class="form-control" id="UserEmail" name="UserEmail" aria-describedby="" placeholder="Ingresa un Correo Electrónico" value="{{old('UserEmail')}}">
                </div>
                <div class="mb-3">
                    <label for="InputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="UserPassword" name="UserPassword" placeholder="Ingrese una contraeña" value="{{old('UserPassword')}}">
                </div>
                <div class="mb-3">
                    <label for="featured" class="form-label">Imagen de Perfil</label>
                    <input type="file" class="form-control" id="featured" name="featured" placeholder="Ingrese una contraeña" value="{{old('UserPassword')}}">
                </div>

  
                <button type="submit" class="btn btn-primary">Crear Usuario</button>
            </form>

            <div class="btn-cerrar">
                <label for="btn-modal">Cancelar</label>
            </div>
        </div>
        <label for="btn-modal" class="cerrar-modal"></label>
    </div>
<!-- FIN PRIMERA VENTANA MODAL DIRIGIDA A LA CREACIÓN DE UN NUEVO USUARIO-->


<!--SEGUNDA VENTANA MODAL DIRIGIDA AL CAMBIO DE CONTRASEÑA-->
<input type="checkbox" id="btn-modal2">
    <div class="container-modal2">
        <div class="content-modal2">
            <h2>¡Bienvenido!</h2>
            <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
            <div class="btn-cerrar2">
                <label for="btn-modal2">Cerrar</label>
            </div>
        </div>
        <label for="btn-modal2" class="cerrar-modal2"></label>
    </div>

<!--FIN DE LA SEGUNDA VENTANA MODAL DIRIGIDA AL CAMBIO DE CONTRASEÑA-->


        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img alt="Icewall Tailwind HTML Admin Template" class="w-12" src="{{asset('dist/images/tsjw.png')}}">
                </a>
                <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>  
            <ul class="border-t border-theme-2 py-5 hidden">
                <li>
                    <li>
                    <a href="{{ route('dashboard.show') }}" class="menu">
                        <div class="menu__icon"> <i data-feather="home"></i> </div>
                        <div class="menu__title"> Pagina Principal </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="mail"></i> </div>
                        <div class="menu__title"> Correspondencia <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{ route('inbox.index') }}" class="menu">
                                <div class="menu__icon"> <i data-feather="inbox"></i> </div>
                                <div class="menu__title"> Buzón de Entrada </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('send.mail') }}" class="menu">
                                <div class="menu__icon"> <i data-feather="navigation"></i> </div>
                                <div class="menu__title"> Enviar Documento </div>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="user"></i> </div>
                        <div class="menu__title"> Usuarios <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <label for="btn-modal" class="menu">
                                <div class="menu__icon"> <i data-feather="user-plus"></i> </div>
                                <div class="menu__title"> Crear Usuario </div>
                            </label>
                        </li>
                        <li>
                            <a href="password" class="menu">
                                <div class="menu__icon"> <i data-feather="unlock"></i> </div>
                                <div class="menu__title"> Cambiar Contraseña </div>
                            </a>
                        </li>
                    </ul>
                </li>
                
               <!--<li class="menu__devider my-6"></li>-->
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="edit"></i> </div>
                        <div class="menu__title"> Bitacora <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="bitacora" class="menu">
                                <div class="menu__icon"> <i data-feather="book"></i> </div>
                                <div class="menu__title"> Bitacora </div>
                            </a>
                        </li>
                        <li>
                            <a href="restore" class="menu">
                                <div class="menu__icon"> <i data-feather="upload-cloud"></i> </div>
                                <div class="menu__title"> Respaldo y Restauración </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <li>
                    <a href="/" class="menu">
                        <div class="menu__icon"> <i data-feather="delete"></i> </div>
                        <div class="menu__title"> Salida </div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END: Mobile Menu -->
        <!-- BEGIN: Top Bar -->
        <div class="top-bar-boxed border-b border-theme-2 -mt-7 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 md:pt-0 mb-12">
            <div class="h-full flex items-center">
                <!-- BEGIN: Logo -->
                <a href="" class="-intro-x hidden md:flex">
                    <img alt="Icewall Tailwind HTML Admin Template" class="w-12" src="{{asset('dist/images/tsjw.png')}}">
                </a>
                <!-- END: Logo -->
                <!-- BEGIN: Breadcrumb -->
                <div class="-intro-x breadcrumb mr-auto"> <a href="">Aplicación</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Sistema de Correspondencia</a> </div>


<!-- BEGIN: Search -->
                <div class="intro-x relative mr-3 sm:mr-6">
                    <div class="search hidden sm:block">
                        <input type="text" class="search__input form-control dark:bg-dark-1 border-transparent placeholder-theme-8" placeholder="Buscar...">
                        <i data-feather="search" class="search__icon dark:text-gray-300"></i> 
                    </div>
                    <a class="notification sm:hidden" href=""> <i data-feather="search" class="notification__icon dark:text-gray-300"></i> </a>
                    
                </div>
                <!-- END: Search -->
 
                <!-- BEGIN: Account Menu -->
                <div class="intro-x dropdown w-8 h-8">
                    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110" role="button" aria-expanded="false">
                        <img alt="Icewall Tailwind HTML Admin Template" src="@auth{{asset(Auth::user()->featured)}}@endauth">
                    </div>
                    <div class="dropdown-menu w-56">
                        <div class="dropdown-menu__content box bg-theme-11 dark:bg-dark-6 text-white">
                            <div class="p-4 border-b border-theme-12 dark:border-dark-3">
                                <div class="font-medium">@auth{{Auth::user()->name}}@endauth</div>
                                <div class="text-xs text-theme-13 mt-0.5 dark:text-gray-600">@auth{{Auth::user()->email}}@endauth</div>
                            </div>
                            <div class="p-2">
                                <label for="btn-modal2" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </label>
                            </div>
                            <div class="p-2 border-t border-theme-12 dark:border-dark-3">
                                <a href="{{route('users.out')}}" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Account Menu -->
            </div>
        </div>
        <!-- END: Top Bar -->
                <!-- END: Account Menu -->
            </div>
        </div>
        <!-- END: Top Bar -->
        <div class="wrapper">
            <div class="wrapper-box">
                <!-- BEGIN: Side Menu -->
                <nav class="side-nav">
                    <ul>
                        <li>
                            <a href="{{ route('dashboard.show') }}" class="side-menu side-menu">
                                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                                <div class="side-menu__title">
                                    Pagina Principal 
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:;.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="mail"></i> </div>
                                <div class="side-menu__title">
                                    Correspondencia
                                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="{{ route('inbox.index') }}" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                                        <div class="side-menu__title"> Buzón de Entrada </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('send.mail') }}" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="navigation"></i> </div>
                                        <div class="side-menu__title"> Enviar Documento </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:;.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="user"></i> </div>
                                <div class="side-menu__title">
                                    Usuario
                                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <label class="side-menu" for="btn-modal" style="cursor: pointer;">
                                        <div class="side-menu__icon"> <i data-feather="user-plus"></i> </div>
                                        <div class="side-menu__title"> Crear Usuario </div>
                                    </label>
                                </li>
                                <li>
                                    <a href="{{ route('user.show') }}" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                                        <div class="side-menu__title"> Usuarios Registrados </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="file"></i> </div>
                                <div class="side-menu__title">
                                    Documento
                                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="{{ route('document.index') }}" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                                        <div class="side-menu__title"> Crear Documento </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('document.gestor') }}" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="file-plus"></i> </div>
                                        <div class="side-menu__title"> Añadir Gestor de Documento </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('log.show') }}" class="side-menu side-menu">
                                <div class="side-menu__icon"> <i data-feather="book"></i> </div>
                                <div class="side-menu__title">
                                    Bitacora
                                </div>
                            </a>
                        </li>
                        
                        <li class="side-nav__devider my-6"></li>

                       <!-- <li>
                            <a href="{{route('users.out')}}" class="side-menu side-menu">
                                <div class="side-menu__icon"> <i data-feather="delete"></i> </div>
                                <div class="side-menu__title">
                                    Salida
                                </div>
                            </a>
                        </li> -->

                    </ul>
                </nav>
                <!-- END: Side Menu -->
                
                <!-- BEGIN: Content -->
                <div class="content">
                @section('content')
                @show
                </div>
                <!-- END: Content -->
                </div>
        </div>
        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="{{asset('dist/js/app.js')}}"></script>
        <!-- END: JS Assets-->
    </body>
</html>