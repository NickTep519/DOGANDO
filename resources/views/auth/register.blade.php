@extends('base')

@section('title', config('app.name'). '-register')
    
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
                        <h1 class="title">S'inscrire</h1>
                        <div class="breadcrumb-area">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">S'inscrire</li>
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
                    <div class="section-header" data-aos="fade-up" data-aos-duration="1200">
                        <span class="sub-title"><span>S'inscrire</span></span>
                        <h2 class="section-title">Inscrivez-vous à votre compte</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="account-form-area" data-aos="fade-up" data-aos-duration="1200">

                        <form method="POST" action="{{route('register')}}" class="account-form">
                            @csrf

                            <div class="row mb-10-none">

                                <!-- Email Address -->

                                <div class="col-xl-12 form-group">
                                    <label for="email" :value="__('Email')" class="icon"><i class="las la-envelope"></i></label>
                                    <input type="email" name="email" id="email" :value="old('email')" autocomplete="username" autofocus class="form--control"  placeholder="Email" required>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                               <!-- Name -->

                                <div class="col-xl-12 form-group">
                                    <label for="name" :value="__('Name')" class="icon"><i class="icon-name_icone"></i></label>
                                    <input type="text" id="name"  name="name"  :value="old('name')" class="form--control" placeholder="Name" required autocomplete="name" >
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>

                                <!-- Password -->

                                <div class="col-xl-12 form-group">
                                    <label  for="password" :value="__('Password')" class="icon"><i class="icon-Create_Password_icone"></i></label>
                                    <input type="password" name="password" id="password" class="form--control" autocomplete="new-password"
                                        placeholder="Creez Password" required>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Confirm Password -->

                                <div class="col-xl-12 form-group">
                                    <label  for="password_confirmation" :value="__('Confirm Password')" class="icon"><i class="icon-Create_Password_icone"></i></label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form--control" autocomplete="new-password"
                                        placeholder="Confirmez Password" required>
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>

                                <div class="col-lg-12 form-group text-center">
                                    <button type="submit" class="btn--base w-100">S'inscrire</button>
                                </div>
                        
                                <div class="col-lg-12 text-center">
                                    <div class="account-item mt-10">
                                        <label>Vous avez déjà un compte ? <a href="{{route('login')}}" class="text--base">Se Connecter</a></label>
                                    </div>
                                </div>
                            </div>
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
