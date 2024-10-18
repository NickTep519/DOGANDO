@extends('base')

@section('title', config('app.name'))

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
                            <h1 class="title">Details</h1>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Details</li>
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
        Start About
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="about-section about--style about--style-three page-wrapper-two pt-120">
        <div class="container">
            <div class="row justify-content-center align-items-center mb-30-none">
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="about-thumb" data-aos="fade-right" data-aos-duration="1200">
                        <img src= {{asset("assets/images/about-three.png")}}   alt="about">
                        <div class="about-element-two" data-aos="fade-up" data-aos-duration="1200">
                            <img src= {{asset("assets/images/element/element-15.png")}}  alt="element">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="about-content" data-aos="fade-left" data-aos-duration="1200">
                        <span class="sub-title text--base">Specification</span>
                        <h2 class="title">{{$post->title}}</h2>
                        <p>{{$post->description}}</p>
                        <div class="about-list-area about-list--style">
                            <ul class="about-list">
                                <li>Ville de Depart : {{$post->city_starts}}.</li>
                                <li>Ville d'Arrivée : {{$post->city_ends}}.</li>
                                @if ($post->type == true)
                                <li>Date de Depart : {{$post->starts_at->translatedFormat('d M Y') }} </li>
                                <li>Date d'Arrivée : {{$post->ends_at->translatedFormat('d M Y')}} </li>
                                @endif
                            </ul>
                        </div>

                        <div class="header-action">
                            <a href="{{route('conversation.show', $post->user)}}" class="btn--base"><i
                                    class="icon-btn-icon"></i>Contacter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End About
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


   <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Statistics
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <section class="statistics-section statistics--style ptb-120">
        <div class="container">
            <div class="statistics-area">
                <div class="row justify-content-center mb-30-none">
                    @if ($post->type == true)          
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="statistics-item">
                            <div class="statistics-icon">
                                <i class="icon-MAX_RANGE"></i>
                            </div>
                            <div class="statistics-content">
                                <div class="odo-area">
                                    <h3 class="odo-title odometer" data-odometer-final="{{$post->price}}">0</h3>
                                    <span class="sub-title">F</span>
                                </div>
                                <p>Prix Par Kg (CFA) </p>
                            </div>
                        </div>
                    </div>
                    @endif
             
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="statistics-item">
                            <div class="statistics-icon">
                                <i class="icon-Aircraft_Speed"></i>
                            </div>
                            <div class="statistics-content">
                                <div class="odo-area">
                                    <h3 class="odo-title odometer" data-odometer-final="{{$post->kg}}">0</h3>
                                    <span class="sub-title">kg</span>
                                </div>
                                <p>kilos</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="statistics-item">
                            <div class="statistics-icon">
                                <i class="icon-Take_off_Distance"></i>
                            </div>
                            <div class="statistics-content">
                                <div class="odo-are">
                                    <h3 class="odo-title odomete" >  {{ ucfirst($post->m_transport) }} </h3>
                                </div>
                                <p>Transport</p>
                            </div>
                        </div>
                    </div> 

                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Statistics
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


@endsection