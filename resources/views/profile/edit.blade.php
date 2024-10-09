@php
    $active_user = true  ; 
@endphp

@extends('dashboard.base')

@section('title', config('app.name').'-'.$user->name )

@section('content')

<div class="dashboard-content-wrap">
    <div class="dashboard-bread dashboard--bread">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="breadcrumb-content">
              <div class="section-heading">
                <h2 class="sec__title font-size-30 text-white">Settings</h2>
              </div>
            </div>     <!-- end breadcrumb-content -->
          </div>      <!-- end col-lg-6 -->
          <div class="col-lg-6">
            <div class="breadcrumb-list text-end">
              <ul class="list-items">
                <li><a href="index.html" class="text-white">Home</a></li>
                <li>Dashboard</li>
                <li>Settings</li>
              </ul>
            </div>         <!-- end breadcrumb-list -->
          </div>       <!-- end col-lg-6 -->
        </div>          <!-- end row -->
      </div>
    </div>           <!-- end dashboard-bread -->
    <div class="dashboard-main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="form-box">
              <div class="form-title-wrap">
                <h3 class="title">Informations Personnelles</h3>
              </div>
              <div class="form-content">

                <div class="contact-form-action">

                    <form method="post" action="{{ route('profile.update') }}">
                        @csrf
                        @method('patch')

                        <div class="row">
                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label  for="name" :value="__('Name')" class="label-text">Nom</label>
                                    <div class="form-group">
                                        <span class="la la-user form-icon"></span>
                                        <input
                                            class="form-control"
                                            id="name" name="name" type="text"  value="{{old('name', $user->name)}}"
                                            required autofocus autocomplete="name"
                                        />
                                        <x-input-error class="mt-2" :messages="$errors->get('name')" />

                                    </div>
                                </div>
                            </div> <!-- end col-lg-6 -->

                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label  for="adress" :value="__('Adress')" class="label-text">Address</label>
                                    <div class="form-group">
                                        <span class="la la-map form-icon"></span>
                                        <input
                                            class="form-control"
                                            type="text"
                                            id="adress" name="adress" value=" {{ old('adress', $user->adress)}}" 
                                            required autofocus autocomplete="username"
                                        />
                                        <x-input-error class="mt-2" :messages="$errors->get('adress')" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label  for="email" :value="__('Email')"  class="label-text">Email Address</label>
                                    <div class="form-group">
                                        <span class="la la-envelope form-icon"></span>
                                        <input
                                            class="form-control"
                                            id="email" name="email" type="email" 
                                            value=" {{old('email', $user->email)}} " 
                                            required autocomplete="username"
                                        />
                                        <x-input-error class="mt-2" :messages="$errors->get('email')" />

                                    </div>
                                </div>
                            </div> <!-- end col-lg-6 -->

                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label  for="phone" :value="__('Phone')" class="label-text">Tel :</label>
                                    <div class="form-group">
                                        <span class="la la-phone form-icon"></span>
                                        <input
                                            class="form-control"
                                            id="phone" name="phone" type="tel" 
                                            value=" {{old('phone', $user->phone)}} "
                                            required autocomplete="username"
                                        />
                                        <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="btn-box">
                                    <button class="theme-btn">
                                        Save Changes
                                    </button>
                                </div>
                            </div>   <!-- end col-lg-12 -->
                        </div>   <!-- end row -->
                    </form>
                </div>
            </div>
        </div>    <!-- end form-box -->
    </div>      <!-- end col-lg-6 -->
    
        <div class="col-lg-6">
          <div class="form-box">
            <div class="form-title-wrap">
              <h3 class="title pb-2">Forgot Password</h3>
              <p class="font-size-15 line-height-24">
                  Saisissez l'adresse e-mail de votre compte pour réinitialiser le mot de passe. Ensuite,
                  vous recevrez un lien par e-mail <br />
                  pour réinitialiser le mot de passe. </p>
            </div>

            <div class="form-content" >
              <div class="contact-form-action">
                <form  method="POST" action="{{ route('password.email') >
                  @csrf

                  <div class="input-box" >
                    <label for="email" :value="__('Email')"  class="label-text" >Email Address</label>
                    <div class="form-group">
                      <span class="la la-envelope form-icon"></span>
                      <input
                        class="form-control"
                        placeholder="Enter email address"
                        id="email" type="email" name="email" :value="old('email')" required autofocus
                      />
                      <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="btn-box"> 
                      <button class="theme-btn">Recover Password </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>       <!-- end form-box -->
          </div>     <!-- end col-lg-6 -->
        </div>    <!-- end row -->


      <div class="col-lg-6">
      <div class="form-box">
        <div class="form-title-wrap">
          <h3 class="title">Changement de mot de pass</h3>
        </div>

        <div class="form-content">
          <div class="contact-form-action">

            <form  method="post" action="{{ route('password.update') }}" >
                @csrf
                @method('put')

                <div class="row">
                  <div class="col-lg-6 responsive-column">
                    <div class="input-box">
                      <label  for="update_password_current_password" :value="__('Current Password')"
                        class="label-text">Current Password</label>
                      <div class="form-group">
                        <span class="la la-lock form-icon"></span>
                        <input
                          class="form-control"
                          placeholder="Current password"
                          id="update_password_current_password" name="current_password" type="password" autocomplete="current-password"
                        />
                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                      </div>
                    </div>
                  </div>    <!-- end col-lg-6 -->

                  <div class="col-lg-6 responsive-column">
                    <div class="input-box">
                      <label  for="update_password_password" :value="__('New Password')"  class="label-text">New Password</label>
                      <div class="form-group">
                        <span class="la la-lock form-icon"></span>
                        <input
                          class="form-control"
                          placeholder="New password"
                          id="update_password_password" name="password" type="password" autocomplete="new-password"
                        />
                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                      </div>
                    </div>
                  </div>    <!-- end col-lg-6 -->
                  <div class="col-lg-6 responsive-column">
                    <div class="input-box">
                      <label class="label-text"  for="update_password_password_confirmation" :value="__('Confirm Password')" >New Password Again</label>
                        <div class="form-group">
                          <span class="la la-lock form-icon"></span>
                          <input
                            class="form-control"
                            placeholder="New password again"
                            id="update_password_password_confirmation" name="password_confirmation" type="password" autocomplete="new-password"
                          />
                          <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                        </div>
                      </div>
                    </div>          <!-- end col-lg-6 -->
                    <div class="col-lg-12">
                      <div class="btn-box">
                        <button class="theme-btn">Change Password</button>
                      </div>
                    </div>          <!-- end col-lg-12 -->
                  </div>  <!-- end row -->
                </form>
              </div>
            </div>
          </div>       <!-- end form-box -->
        </div>       <!-- end col-lg-6 -->


<div class="col-lg-6">
      <div class="form-box">
        <div class="form-title-wrap">
          <h3 class="title">Supprimez votre compte</h3>
          <br>
           <p class="font-size-15 line-height-24">
            Êtes-vous sûr de vouloir supprimer votre compte ? <br>
             Une fois votre compte supprimé, toutes ses ressources et données seront définitivement supprimées. <br> 
             Veuillez saisir votre mot de passe pour confirmer que vous souhaitez supprimer définitivement votre compte.
            </p>
        </div>

        <div class="form-content">
          <div class="contact-form-action">

            <form  method="post" action="{{ route('profile.destroy') }}" >
                @csrf
                @method('delete')

                <div class="row">
                  <div class="col-lg-6 responsive-column">
                    <div class="input-box">
                      <label   for="password" value="{{ __('Password') }}"
                        class="label-text"> Mot de Pass </label>
                      <div class="form-group">
                        <span class="la la-lock form-icon"></span>
                        <input
                          class="form-control"
                          placeholder="Mot de Pass"
                           id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                        />
                      <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                      </div>
                    </div>
                  </div>    <!-- end col-lg-6 -->

                
                    <div class="col-lg-12">
                      <div class="btn-box">
                        <button class="theme-btn">Suprimer</button>
                      </div>
                    </div>          <!-- end col-lg-12 -->
                  </div>  <!-- end row -->
                </form>
              </div>
            </div>
          </div>       <!-- end form-box -->
        </div>       <!-- end col-lg-6 -->


        <div class="border-top mt-4"></div>
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="copy-right padding-top-30px">
              <p class="copy__desc">
                &copy; Copyright Trizen <span id="get-year"></span> . Made
                with <span class="la la-heart"></span> by
                <a href=""
                  >TechyDevs</a
                >
              </p>
            </div>
            <!-- end copy-right -->
          </div>
          <!-- end col-lg-7 -->
          <div class="col-lg-5">
            <div class="copy-right-content text-end padding-top-30px">
              <ul class="social-profile">
                <li>
                  <a href="user-dashboard-settings.html#"><i class="lab la-facebook-f"></i></a>
                </li>
                <li>
                  <a href="user-dashboard-settings.html#"><i class="lab la-twitter"></i></a>
                </li>
                <li>
                  <a href="user-dashboard-settings.html#"><i class="lab la-instagram"></i></a>
                </li>
                <li>
                  <a href="user-dashboard-settings.html#"><i class="lab la-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
            <!-- end copy-right-content -->
          </div>
          <!-- end col-lg-5 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container-fluid -->
    </div>
    <!-- end dashboard-main-content -->
  </div>
  <!-- end dashboard-content-wrap -->    
    
@endsection

