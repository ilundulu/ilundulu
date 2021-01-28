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
        <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
        <!-- Google Fonts
            ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <!-- Bootstrap CSS
            ============================================ -->
        
        
            <link rel="stylesheet" href="/css/bootstrap.min.css">
            
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="/css/font-awesome.min.css">
        

        <!-- owl.carousel CSS
            ============================================ -->
        <link rel="stylesheet" href="/css/owl.carousel.css">
        <link rel="stylesheet" href="/css/owl.theme.css">
        <link rel="stylesheet" href="/css/owl.transitions.css">
        <!-- animate CSS
            ============================================ -->
        <link rel="stylesheet" href="/css/animate.css">
        <!-- normalize CSS
            ============================================ -->
        <link rel="stylesheet" href="/css/normalize.css">
        <!-- meanmenu icon CSS
            ============================================ -->
        <link rel="stylesheet" href="/css/meanmenu.min.css">
        <!-- main CSS
            ============================================ -->
        <link rel="stylesheet" href="/css/main.css">
        <!-- educate icon CSS
            ============================================ -->
        <link rel="stylesheet" href="/css/educate-custon-icon.css">
        <!-- morrisjs CSS
            ============================================ -->
        <link rel="stylesheet" href="/css/morrisjs/morris.css">
        <!-- mCustomScrollbar CSS
            ============================================ -->
        <link rel="stylesheet" href="/css/scrollbar/jquery.mCustomScrollbar.min.css">
        <!-- metisMenu CSS
            ============================================ -->
        <link rel="stylesheet" href="/css/metisMenu/metisMenu.min.css">
        <link rel="stylesheet" href="/css/metisMenu/metisMenu-vertical.css">
        <!-- calendar CSS
            ============================================ -->
        <link rel="stylesheet" href="/css/calendar/fullcalendar.min.css">
        <link rel="stylesheet" href="/css/calendar/fullcalendar.print.min.css">
        <!-- style CSS
            ============================================ -->
        <link rel="stylesheet" href="/css/style.css">
        <!-- responsive CSS
            ============================================ -->
        <link rel="stylesheet" href="/css/responsive.css">
        <!-- modernizr JS
            ============================================ -->
        <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Start Left menu area -->
        <div class="left-sidebar-pro">
            <nav id="sidebar" class="">
                <div class="sidebar-header">
                    <a href="/"><img class="main-logo" src="/img/logo/logo.png" alt="" /></a>
                    <strong><a href="/"><img src="/img/logo/logosn.png" alt="" /></a></strong>
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
                                    <li><a title="All Professors" href="all-professors.html"><span class="mini-sub-pro">Registrar</span></a></li>
                                    <li><a title="Add Professor" href="add-professor.html"><span class="mini-sub-pro">Editar</span></a></li>
                                    <li><a title="Add Professor" href="add-professor.html"><span class="mini-sub-pro">Solicitar Equipa</span></a></li>
                                    <li><a title="Edit Professor" href="edit-professor.html"><span class="mini-sub-pro">Convidar Desenvolvedor</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Projecto</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a href="/projecto/criar/"><span class="mini-sub-pro">Criar Projecto</span></a></li>
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
                                    <li><a href="/linguagem/adicionar/"><span class="mini-sub-pro">Adicionar</span></a></li>
                                    <li><a href="/linguagem/lista/"><span class="mini-sub-pro">Vizualizar</span></a></li>
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
                            <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
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
                                                    <li class="nav-item"><a href="#" class="nav-link">Compiladores e Interpretadores</a>
                                                    </li>
                                                    <li class="nav-item"><a href="#" class="nav-link">Suporte</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                            <div class="header-right-info">
                                                <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                    <li class="nav-item">
                                                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                                <img src="&" alt="" />
                                                                <span class="admin-name">Utilizador</span>
                                                                <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                            </a>
                                                        <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                            <li><a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>Minha Conta</a>
                                                            </li>
                                                            <li><a href="#"><span class="edu-icon edu-settings author-log-ic"></span>Definições</a>
                                                            </li>
                                                            <li><a href="#"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                       
                                                    
                                                </ul>
                                            </div>
                                        </div>
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
                                                    <li><a title="All Library" href="library-assets.html"><span class="mini-sub-pro">Adicionar</span></a></li>
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
                                            <ul class="breadcome-menu">
                                                <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                                </li>
                                                <li><span class="bread-blod">Dashboard V.1</span>
                                                </li>
                                            </ul>
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
                    @if (session('msg'))
                        <p>{{session('msg')}}</p>
                    @endif
                    @yield('content')
                </div>
            </div>
            


            <!-- Fim conteudo-->
            <div class="footer-copyright-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer-copy-right">
                                <p>Copyright © {{ date('Y') }}. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- jquery
            ============================================ -->
        <script src="/js/vendor/jquery-1.12.4.min.js"></script>
        <!-- bootstrap JS
            ============================================ -->
        <script src="/js/bootstrap.min.js"></script>
        <!-- wow JS
            ============================================ -->
        <script src="/js/wow.min.js"></script>
        <!-- price-slider JS
            ============================================ -->
        <script src="/js/jquery-price-slider.js"></script>
        <!-- meanmenu JS
            ============================================ -->
        <script src="/js/jquery.meanmenu.js"></script>
        <!-- owl.carousel JS
            ============================================ -->
        <script src="/js/owl.carousel.min.js"></script>
        <!-- sticky JS
            ============================================ -->
        <script src="/js/jquery.sticky.js"></script>
        <!-- scrollUp JS
            ============================================ -->
        <script src="/js/jquery.scrollUp.min.js"></script>
        <!-- counterup JS
            ============================================ -->
        <script src="/js/counterup/jquery.counterup.min.js"></script>
        <script src="/js/counterup/waypoints.min.js"></script>
        <script src="/js/counterup/counterup-active.js"></script>
        <!-- mCustomScrollbar JS
            ============================================ -->
        <script src="/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="/js/scrollbar/mCustomScrollbar-active.js"></script>
        <!-- metisMenu JS
            ============================================ -->
        <script src="/js/metisMenu/metisMenu.min.js"></script>
        <script src="/js/metisMenu/metisMenu-active.js"></script>
        <!-- morrisjs JS
            ============================================ -->
        <script src="/js/morrisjs/raphael-min.js"></script>
        <script src="/js/morrisjs/morris.js"></script>
        <script src="/js/morrisjs/morris-active.js"></script>
        <!-- morrisjs JS
            ============================================ -->
        <script src="/js/sparkline/jquery.sparkline.min.js"></script>
        <script src="/js/sparkline/jquery.charts-sparkline.js"></script>
        <script src="/js/sparkline/sparkline-active.js"></script>
        <!-- calendar JS
            ============================================ -->
        <script src="/js/calendar/moment.min.js"></script>
        <script src="/js/calendar/fullcalendar.min.js"></script>
        <script src="/js/calendar/fullcalendar-active.js"></script>
        <!-- plugins JS
            ============================================ -->
        <script src="/js/plugins.js"></script>
        <!-- main JS
            ============================================ -->
        <script src="/js/main.js"></script>
        <!-- tawk chat JS
            ============================================ -->
        <script src="/js/tawk-chat.js"></script>
    </body>
    
    </html>