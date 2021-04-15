<!DOCTYPE html>
<!--<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">-->
<html class="no-js" lang="pt-pt">    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
            ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
        <!-- Google Fonts
            ============================================ -->
        <!-- Bootstrap CSS
            ============================================ -->
        
        
            <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
            
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        

        <!-- owl.carousel CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">
        <!-- animate CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <!-- normalize CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('/css/normalize.css')}}">
        <!-- meanmenu icon CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
        <!-- main CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <!-- educate icon CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/educate-custon-icon.css') }}">
        <!-- morrisjs CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/morrisjs/morris.css') }}">
        <!-- mCustomScrollbar CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
        <!-- metisMenu CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/metisMenu/metisMenu.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/metisMenu/metisMenu-vertical.css') }}">
        <!-- calendar CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/calendar/fullcalendar.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/calendar/fullcalendar.print.min.css') }}">
        <!-- style CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- responsive CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <!-- modernizr JS
            ============================================ -->
        <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>

        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/select2.min.js')}}"></script>
    </head>
    
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Start Left menu area -->
        <div class="left-sidebar-pro">
            <nav id="sidebar" class="">
                <div class="sidebar-header">
                    <a href="route{{'/'}}"><img class="main-logo"  style="width: 80%" src="{{asset('/img/logo/logo.png')}}" alt="" /></a>
                    <strong><a href="route{{'/'}}"><img src="{{asset('/img/logo/logosn.png')}}" alt="" /></a></strong>
                </div>
                <div class="left-custom-menu-adp-wrap comment-scrollbar">
                    <nav class="sidebar-nav left-sidebar-menu-pro">
                        <ul class="metismenu" id="menu1">
                            <li class="">
                                <a class="has-arrow" href="/">
                                       <span class="educate-icon educate-home icon-wrap"></span>
                                       <span class="mini-click-non">Densevolvedor</span>
                                    </a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a title="Dashboard v.1" href="index.html"><span class="mini-sub-pro">Registrar</span></a></li>
                                    <li><a title="Dashboard v.2" href="index-1.html"><span class="mini-sub-pro">Editar</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Manager</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a title="All Courses" href="all-courses.html"><span class="mini-sub-pro">Registar</span></a></li>
                                    <li><a title="Add Courses" href="add-course.html"><span class="mini-sub-pro">Editar</span></a></li>
                    
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Equipa</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a title="All Professors" href="{{route('equipa.criar')}}"><span class="mini-sub-pro">Registrar</span></a></li>
                                    <li><a title="Add Professor" href="{{route('equipa.all')}}"><span class="mini-sub-pro">Lista das Equipas</span></a></li>
                                    <li><a title="Add Professor" href="add-professor.html"><span class="mini-sub-pro">Solicitar Equipa</span></a></li>
                                    <li><a title="Edit Professor" href="edit-professor.html"><span class="mini-sub-pro">Convidar Desenvolvedor</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Projecto</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a href="{{ route('projecto.criar') }}"><span class="mini-sub-pro">Criar Projecto</span></a></li>
                                    <li><a href="{{ route('projecto.lista') }}"><span class="mini-sub-pro">Lista de Projectos</span></a></li>
                                    <li><a href="add-student.html"><span class="mini-sub-pro">Editar</span></a></li>
                                    <li><a href="add-student.html"><span class="mini-sub-pro">Upload</span></a></li>
                                    <li><a href="add-student.html"><span class="mini-sub-pro">Envios</span></a></li>
                                    <li><a href="edit-student.html"><span class="mini-sub-pro">Adicionar Enunciado</span></a></li>
                                    <li><a href="student-profile.html"><span class="mini-sub-pro">Testar Projectos</span></a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Linguagens</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a href="{{route('linguagem')}}"><span class="mini-sub-pro">Adicionar</span></a></li>
                                    <li><a href="{{route('allLinguagem')}}"><span class="mini-sub-pro">Vizualizar</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </nav>
        </div>
        <!-- End Left menu area -->
        <!-- Start Welcome area -->
        <div class="all-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="logo-pro">
                            <a href="route{{'/'}}"><img class="main-logo" src="asset{{'/img/logo/logo.png'}}" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-advance-area">
                <div class="header-top-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="header-top-wraper">
                                    <div class="row">
                                        <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                            <div class="menu-switcher-pro">
                                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                        <i class="educate-icon educate-nav"></i>
                                                    </button>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                            <div class="header-top-menu tabl-d-n">
                                                <ul class="nav navbar-nav mai-top-nav">
                                                    <li class="nav-item"><a href="#" class="nav-link">Home</a>
                                                    </li>
                                                    <li class="nav-item"><a href="#" class="nav-link">Sobre</a>
                                                    </li>
                                                    <li class="nav-item"><a href="#" class="nav-link">Suporte</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                            @auth
                                            
                                        
                                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                                <div class="header-right-info">
                                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                        <li class="nav-item">
                                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                                    <img src="&" alt="" />
                                                                    <span class="admin-name">
                                                                        <?php
                                                                            $user = Auth::user();
                                                                            echo $user->name;    
                                                                        ?>                                                               
                                                                    </span>
                                                                    <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                                </a>
                                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                                <li>
                                                                    <!-- Account Management -->
                                                                    <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                                                                        {{ __('Perfil') }}
                                                                    </x-jet-responsive-nav-link>
                                                                </li>
                                                                <li>
                                                                    <!-- Authentication -->
                                                                    <form method="POST" action="{{ route('logout') }}">
                                                                        @csrf

                                                                        <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                                                                    onclick="event.preventDefault();
                                                                                        this.closest('form').submit();">
                                                                            {{ __('Log Out') }}
                                                                        </x-jet-responsive-nav-link>
                                                                    </form>
                                                                </li>
                                                            </ul>

                                                            <!-- Responsive Settings Options -->
                                                            <div class="pt-4 pb-1 border-t border-gray-200">
                                                                <div class="flex items-center px-4">
                                                                <div class="mt-3 space-y-1">


                                                                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                                                        <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                                                                            {{ __('API Tokens') }}
                                                                        </x-jet-responsive-nav-link>
                                                                    @endif


                                                                </div>
                                                            </div>
                                                        </li>
                                           
                                                        
                                                    </ul>
                                                </div>
                                            
                                            </div>
                                        
                                            @endauth
                                        
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu start -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul class="mobile-menu-nav">
                                        
                                            <li class="">
                                                <a class="has-arrow" href="/">
                                                        <span class="educate-icon educate-home icon-wrap"></span>
                                                        <span class="mini-click-non">Densevolvedor</span>
                                                    </a>
                                                <ul class="submenu-angle" aria-expanded="false">
                                                    <li><a title="Dashboard v.1" href="index.html"><span class="mini-sub-pro">Registrar</span></a></li>
                                                    <li><a title="Dashboard v.2" href="index-1.html"><span class="mini-sub-pro">Editar</span></a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Manager</span></a>
                                                <ul class="submenu-angle" aria-expanded="false">
                                                    <li><a title="All Courses" href="all-courses.html"><span class="mini-sub-pro">Registar</span></a></li>
                                                    <li><a title="Add Courses" href="add-course.html"><span class="mini-sub-pro">Editar</span></a></li>
                                    
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Equipa</span></a>
                                                <ul class="submenu-angle" aria-expanded="false">
                                                    <li><a title="All Professors" href="all-professors.html"><span class="mini-sub-pro">Registrar</span></a></li>
                                                    <li><a title="Add Professor" href="add-professor.html"><span class="mini-sub-pro">Editar</span></a></li>
                                                    <li><a title="Add Professor" href="add-professor.html"><span class="mini-sub-pro">Solicitar Equipa</span></a></li>
                                                    <li><a title="Edit Professor" href="edit-professor.html"><span class="mini-sub-pro">Convidar Desenvolvedor</span></a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Projecto</span></a>
                                                <ul class="submenu-angle" aria-expanded="false">
                                                    <li><a title="All Students" href="all-students.html"><span class="mini-sub-pro">Adicionar Projecto</span></a></li>
                                                    <li><a title="Add Students" href="add-student.html"><span class="mini-sub-pro">Editar</span></a></li>
                                                    <li><a title="Add Students" href="add-student.html"><span class="mini-sub-pro">Upload</span></a></li>
                                                    <li><a title="Add Students" href="add-student.html"><span class="mini-sub-pro">Envios</span></a></li>
                                                    <li><a title="Edit Students" href="edit-student.html"><span class="mini-sub-pro">Adicionar Enunciado</span></a></li>
                                                    <li><a title="Students Profile" href="student-profile.html"><span class="mini-sub-pro">Testar Projectos</span></a></li>
                                                </ul>
                                            </li>
                
                                            <li>
                                                <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Linguagens</span></a>
                                                <ul class="submenu-angle" aria-expanded="false">
                                                    <li><a href="{{route('addLinguagem')}}"><span class="mini-sub-pro">Adicionar</span></a></li>
                                                    <li><a title="Add Library" href="add-library-assets.html"><span class="mini-sub-pro">Editar</span></a></li>
                                                </ul>
                                            </li>
                                        
                                        </ul>    
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu end -->
                <div class="breadcome-area">
                    <div class="container-fluid">
                        <div class="row">
                            <br><br>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="breadcome-list">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="breadcome-heading">
                                                <form role="search" class="sr-input-func">
                                                    
                                                    <input type="text" placeholder="Pesquisar..." class="search-int form-control">
                                                    <a href="#"><i class="fa fa-search"></i></a>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Conteudo-->

            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                       
                        @if (session('msg'))

                            <div class="alert alert-success alert-success-style1 alert-st-bg alert-st-bg11">
                                <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                                        <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                    </button>
                                <i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro-clr admin-check-pro-clr11" aria-hidden="true"></i>
                                <p><strong>Sucesso!</strong> {{session('msg')}}.</p>
                            </div>
                        @endif
                        @if (session('msgErrorPdf'))

                        <div class="alert alert-danger alert-mg-b alert-success-style4 alert-success-stylenone">
                            <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                                    <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                </button>
                            <i class="fa fa-times edu-danger-error admin-check-pro admin-check-pro-none" aria-hidden="true"></i>
                            <p><strong>Erro!</strong> {{session('msgErrorPdf')}}.</p>
                            </div>
                        @endif

                        @if (session('msgError'))

                        <div class="alert alert-danger alert-mg-b alert-success-style4 alert-success-stylenone">
                            <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                                    <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                </button>
                            <i class="fa fa-times edu-danger-error admin-check-pro admin-check-pro-none" aria-hidden="true"></i>
                            <p><strong>Erro!</strong> {{session('msgError')}}.</p>
                            </div>
                        @endif

                    </div>

                   
                </div>
                @yield('content')
            </div>
            


            <!-- Fim conteudo-->
            <div class="footer-copyright-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer-copy-right">
                                <p style="text-align: left">Ilundulu {{ date('Y') }}.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- jquery
            ============================================ -->
        <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
        <!-- bootstrap JS
            ============================================ -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- wow JS
            ============================================ -->
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <!-- price-slider JS
            ============================================ -->
        <script src="{{ asset('js/jquery-price-slider.js') }}"></script>
        <!-- meanmenu JS
            ============================================ -->
        <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
        <!-- owl.carousel JS
            ============================================ -->
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <!-- sticky JS
            ============================================ -->
        <script src="{{ asset('js/jquery.sticky.js') }}"></script>
        <!-- scrollUp JS
            ============================================ -->
        <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
        <!-- counterup JS
            ============================================ -->
        <script src="{{ asset('js/counterup/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('js/counterup/waypoints.min.js') }}"></script>
        <script src="{{ asset('js/counterup/counterup-active.js') }}"></script>
        <!-- mCustomScrollbar JS
            ============================================ -->
        <script src="{{ asset('js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{ asset('js/scrollbar/mCustomScrollbar-active.js') }}"></script>
        <!-- metisMenu JS
            ============================================ -->
        <script src="{{ asset('js/metisMenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('js/metisMenu/metisMenu-active.js') }}"></script>
        <!-- morrisjs JS
            ============================================ -->
        <script src="{{ asset('js/morrisjs/raphael-min.js') }}"></script>
        <script src="{{ asset('js/morrisjs/morris.js') }}"></script>
        <script src="{{ asset('js/morrisjs/morris-active.js') }}"></script>
        <!-- morrisjs JS
            ============================================ -->
        <script src="{{ asset('js/sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('js/sparkline/jquery.charts-sparkline.js') }}"></script>
        <script src="{{ asset('js/sparkline/sparkline-active.js') }}"></script>
        <!-- calendar JS
            ============================================ -->
        <script src="{{ asset('js/calendar/moment.min.js') }}"></script>
        <script src="{{ asset('js/calendar/fullcalendar.min.js') }}"></script>
        <script src="{{ asset('js/calendar/fullcalendar-active.js') }}"></script>
        <!-- plugins JS
            ============================================ -->
        <script src="{{ asset('js/plugins.js') }}"></script>
        <!-- main JS
            ============================================ -->
        <script src="{{ asset('js/main.js') }}"></script>

    </body>
    
</html>



