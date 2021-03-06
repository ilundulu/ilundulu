<!DOCTYPE html>

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
                                
                            </x-slot>

                            <x-jet-validation-errors class="mb-4" />

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group mt-4">
                                    <x-jet-label for="name" value="{{ __('Nome') }}" />
                                    <x-jet-input id="name" class="form-control block mt-1 w-full form-group" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                </div>

                                <div class="form-group mt-4">
                                    <x-jet-label for="email" value="{{ __('Email') }}" />
                                    <x-jet-input id="email" class="form-control block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                </div>

                                <div class="form-group mt-4">
                                    <x-jet-label for="password" value="{{ __('Palavra-Passe') }}" />
                                    <x-jet-input id="password" class="form-control block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                </div>

                                <div class="form-group mt-4">
                                    <x-jet-label for="password_confirmation" value="{{ __('Confirmação Palavra-Passe') }}" />
                                    <x-jet-input id="password_confirmation" class="form-control block mt-1 w-full " type="password" name="password_confirmation" required autocomplete="new-password" />
                                </div>

                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                    <div class="mt-4">
                                        <x-jet-label for="terms">
                                            <div class="flex items-center">
                                                <x-jet-checkbox name="terms" id="terms"/>

                                                <div class="ml-2">
                                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                    ]) !!}
                                                </div>
                                            </div>
                                        </x-jet-label>
                                    </div>
                                @endif

                                <div class="flex items-center justify-end mt-4">
                                    <a class="form-control underline text-sm text-gray-600 hover:text-gray-900 btn btn-default btn-block" href="{{ route('login') }}">
                                        {{ __('Já está registrado?') }}
                                    </a>

                                    <x-jet-button class="form-control ml-4">
                                        {{ __('Registrar') }}
                                    </x-jet-button>
                                </div>
                            </form>
                        </x-jet-authentication-card>
                    </x-guest-layout>
                </div>
            </div>
        </div>
    </div>
</div>
