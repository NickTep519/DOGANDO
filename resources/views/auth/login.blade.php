@extends('base')


@section('title', config('app.name').'-login')

@section('banner')

  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Banner
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="banner-section inner-banner-section bg-overlay-black bg_img"
    data-background="assets/images/bg/inner-bg.png">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-12 text-center">
                <div class="banner-content">
                    <h1 class="title">Se Connecter</h1>
                    <div class="breadcrumb-area">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Se connecter</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
End Banner
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    
@endsection


@section('content')
    
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Account
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
 <section class="account-section bg--gray ptb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 text-center">
                <div class="section-header">
                    <span class="sub-title"><span>Se connecter</span></span>
                    <h2 class="section-title">Connectez-vous à votre compte</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6">
                <div class="account-form-area">

                    <!-- Session Status -->

                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{route('login')}}" class="account-form">
                        @csrf


                        <div class="row mb-10-none">

                            <!-- Email Address -->

                            <div class="col-xl-12 form-group">
                                <label for="email" :value="__('Email')"  class="icon"><i class="las la-envelope"></i></label>
                                <input type="email" name="email" id="email" :value="old('email')" required autofocus autocomplete="username" class="form--control" placeholder="Email" >
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->

                            <div class="col-xl-12 form-group">
                                <label for="password" :value="__('Password')" class="icon"><i class="icon-Create_Password_icone"></i></label>
                                <input type="password" name="password" id="password" required autocomplete="current-password" class="form--control" placeholder="Create Password" >
                            </div>

                            <!-- Remember Me -->

                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                                </label>
                            </div>


                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                            </div>


                            <div class="col-lg-12 form-group text-center">
                                <button type="submit" class="btn--base w-100"> {{__('Se Connecter')}} </button>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div class="account-item mt-10">
                                    <label>Pas encore inscrit ? <a href="{{route('register')}}" class="text--base">Créer un compte</a></label>
                                </div>
                            </div>
                 é       </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
End Account
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
@endsection