<!DOCTYPE html>


<!--<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">-->
<html class="no-js" lang="pt-pt">    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login</title>
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
    </head>
<x-guest-layout>
    <div class="error-pagewrap">
        <div class="error-page-int">
            <div class="content-error">
                <div class="hpanel">
                    <div class="panel-body">
                        
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img class="main-logo"   src="{{asset('/img/logo/logo.png')}}" alt="" />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif


        <form method="POST" action="{{ route('login') }}" id="loginForm">
            @csrf
            <br><br>
            <div class="form-group">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="form-control block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="form-group mt-4">
                <x-jet-label for="password" value="{{ __('Palavra-Passe') }}" />
                <x-jet-input id="password" class="form-control block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Lembrar-se de mim') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 btn btn-default btn-block" href="{{ route('password.request') }}">
                        {{ __('Esqueceu-se da sua palavra-passe?') }}
                    </a>
                    
                @endif

                <x-jet-button class="form-control ml-4">
                    {{ __('Login') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
    
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
            <!-- tawk chat JS
                ============================================ -->
            <script src="{{ asset('js/tawk-chat.js') }}"></script>
        </body>
        
        </html>