@extends('base')

@section('title', config('app.name'))

@section('banner')

      <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Banner
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <section class="banner-section">
        <div class="banner-element" data-aos="fade-left" data-aos-duration="1200">
            <img src="assets/images/element/element-1.png" alt="element">
        </div>
        <div class="banner-element-two">
            <img src="assets/images/element/element-3.png" alt="element">
        </div>
        <div class="banner-element-three">
            <img src="assets/images/element/element-4.png" alt="element">
        </div>
        <div class="banner-element-four">
            <img src="assets/images/element/element-5.png" alt="element">
        </div>
        <div class="banner-social-area">
            <ul class="banner-social">
                <li><a href="index.html#0"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="index.html#0" class="active"><i class="fab fa-twitter"></i></a></li>
                <li><a href="index.html#0"><i class="fab fa-youtube"></i></a></li>
                <li><a href="index.html#0"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center mb-30-none">
                <div class="col-xxl-5 col-xl-6 col-lg-12 mb-30">
                    <div class="banner-content" data-aos="fade-right" data-aos-duration="1800">
                        <span class="sub-title"><span>DOGAN</span>DO</span>
                        <h1 class="title">Monétisez vos trajets, Envoyez facilement </h1>
                        <p>Votre bagage ou votre colis, tout trouve sa place ici. Gagnez de l’argent en transportant ou trouvez facilement un transporteur pour vos envois internationnaux.
                             Voyagez léger, envoyez sereinement ! Connectez-vous avec des voyageurs ou expéditeurs pour rendre vos trajets ou envois encore plus utiles.</p>
                        <div class="banner-btn">
                            <a href="{{route('annonces.voyage')}}" class="btn--base"><i
                                    class="fas fa-chevron-right mr-2"></i> Commencer </a>
                            <a href="{{route('login')}}" class="btn--base active">Se connceter <i
                                    class="icon-Group-2361 ml-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-6 col-lg-6 mb-30">
                    <div class="banner-thumb">
                        <img src="assets/images/element/element-2.png" alt="element">
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
        Start Overview
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="overview-section ptb-120">
        <div class="container-fluid">
            <div class="overview-area">
                <div class="overview-element" data-aos="fade-up" data-aos-duration="1200">
                    <img src="assets/images/element/element-6.png" alt="element">
                </div>
                <div class="overview-tab">
                    <nav>
                        <div class="overview-tab-thumb" data-aos="fade-left" data-aos-duration="1200">
                            <img src="assets/images/overview/overview-2.png" alt="overview">
                            <div class="nav-tab-area">
                                <div class="nav-tab-header">
                                    <span class="sub-title"><span>#1</span> {{ config('app.name') }}</span>
                                    <h2 class="title">Trouvez le meilleur service</h2>
                                </div>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link" id="private-jet-tab" data-toggle="tab"
                                        data-target="#private-jet" type="button" role="tab"
                                        aria-controls="private-jet" aria-selected="true"><span>01</span> Monétisation 
                                        des trajets</button>
                                    <button class="nav-link active" id="business-jet-tab" data-toggle="tab"
                                        data-target="#business-jet" type="button" role="tab"
                                        aria-controls="business-jet" aria-selected="false"><span>02</span>Optimisation de 
                                        l’espace inutilisé </button>
                                    <button class="nav-link" id="private-helicopter-tab" data-toggle="tab"
                                        data-target="#private-helicopter" type="button" role="tab"
                                        aria-controls="private-helicopter" aria-selected="false"><span>03</span>Réduction des
                                         coûts d’envoi </button>
                                    <button class="nav-link" id="air-ambulance-tab" data-toggle="tab"
                                        data-target="#air-ambulance" type="button" role="tab"
                                        aria-controls="air-ambulance" aria-selected="false"><span>04</span> Rapidité 
                                        des envois </button>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent" data-aos="fade-right" data-aos-duration="1200">
                        <div class="tab-pane fade" id="private-jet" role="tabpanel"
                            aria-labelledby="private-jet-tab">
                            <div class="overview-item">
                                <div class="overview-thumb">
                                    <img src="assets/images/overview/overview-1.png" alt="overview">
                                    <div class="overview-thumb-content">
                                        <h3 class="title"><a href="service-details.html">Monétisation 
                                            des trajets</a>
                                        </h3>
                                        <p> Vous pouvez rentabiliser vos voyages en transportant des colis pour
                                             d'autres personnes, augmentant ainsi vos revenus sans effort supplémentaire.</p>
                                        <div class="overview-btn">
                                            <a href="{{route('annonces.voyage')}}" class="custom-btn"><i
                                                    class="icon-btn-icon-v2"></i> Voyageurs </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="business-jet" role="tabpanel"
                            aria-labelledby="business-jet-tab">
                            <div class="overview-item">
                                <div class="overview-thumb">
                                    <img src="assets/images/overview/overview-1.png" alt="overview">
                                    <div class="overview-thumb-content">
                                        <h3 class="title"><a href="service-details.html">Optimisation de 
                                            l’espace inutilisé </a>
                                        </h3>
                                        <p> Plutôt que de voyager avec des kilos non utilisés,
                                        transporter des biens pour des expéditeurs et maximiser leur charge utile.</p>
                                        <div class="overview-btn">
                                            <a href="{{route('annonces.expedition')}}" class="custom-btn"><i
                                                    class="icon-btn-icon-v2"></i> Expediteurs</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="private-helicopter" role="tabpanel"
                            aria-labelledby="private-helicopter-tab">
                            <div class="overview-item">
                                <div class="overview-thumb">
                                    <img src="assets/images/overview/overview-1.png" alt="overview">
                                    <div class="overview-thumb-content">
                                        <h3 class="title"><a href="service-details.html">Réduction des
                                            coûts d’envoi</a></h3>
                                        <p>Le recours à des voyageurs pour transporter des colis peut être beaucoup moins cher que les services 
                                        de transport traditionnels, en particulier pour les envois internationaux.</p>
                                        <div class="overview-btn">
                                            <a href="{{route('annonces.voyage')}}" class="custom-btn"><i
                                                    class="icon-btn-icon-v2"></i> Voyageurs</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="air-ambulance" role="tabpanel"
                            aria-labelledby="air-ambulance-tab">
                            <div class="overview-item">
                                <div class="overview-thumb">
                                    <img src="assets/images/overview/overview-1.png" alt="overview">
                                    <div class="overview-thumb-content">
                                        <h3 class="title"><a href="service-details.html">Rapidité 
                                            des envois</a></h3>
                                        <p> Si un voyageur se rend rapidement à une destination, l'expéditeur peut envoyer ses biens bien plus 
                                            vite qu'avec les options d'envoi classiques.</p>
                                        <div class="overview-btn">
                                            <a href="{{route('annonces.expedition')}}" class="custom-btn"><i
                                                    class="icon-btn-icon-v2"></i> Expediteurs</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Overview
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Feature
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="feature-section page-wrapper-two ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 text-center">
                    <div class="section-header">
                        <span class="sub-title"> Découvrez les avantages <span> {{ config('app.name') }} </span> </span>
                        <h2 class="section-title">Des avantages en or</h2>
                    </div>
                </div>
            </div>
            <div class="feature-area">
                <div class="row justify-content-center m-0">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="icon-world-svgrepo-com"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="title">Connexion avec une communauté internationale</h3>
                                <p>La plateforme permet aux voyageurs de se connecter avec des expéditeurs du monde entier,
                                    leur offrant ainsi une opportunité unique d’interagir avec différentes cultures.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="icon-money-svgrepo-com-1"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="title">Économie collaborative</h3>
                                <p> Le concept permet d’optimiser des ressources existantes (le poids disponible dans les bagages)
                                    tout en rendant service à une autre personne, renforçant l’esprit de communauté.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="icon-briefcase"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="title">Booster les affaires</h3>
                                <p>Entreprises ou particuliers, pour envoyer des produits périssables
                                    ou urgents, {{config('app.name')}} est la solution idéale pour garantir leurs arrivages à temps.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="icon-note"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="title">Faciliter les échanges transfrontaliers</h3>
                                <p>Pour les entreprises en pleine expansion, cette solution permet d’établir facilement 
                                    des connexions avec des partenaires ou des clients à l’étranger sans les contraintes logistiques habituelles.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="icon-job-announcement"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="title">Flexibilité des annonces </h3>
                                <p> Poster des annonces à tout moment,
                                    selon les opportunités qui se présentent.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="icon-coolest-job"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="title">Sauvez l'Environment</h3>
                                <p>En utilisant des kilos disponibles dans les vols existants, vous minimisez le 
                                    besoin de recourir à des transports supplémentaires, réduisant ainsi l’empreinte carbone des envois.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Feature
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Annonces voyageur
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="charter-section pt-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-header-wrapper">
                        <div class="section-header">
                            <span class="sub-title text--base">Quelques annonces de Voyageurs</span>
                            <h2 class="section-title">Annonces de Voyageurs</h2>
                        </div>
                        <div class="slider-nav-area">
                            <div class="slider-prev">
                                <i class="fas fa-chevron-left"></i>
                            </div>
                            <div class="slider-next">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="charter-slider">
                        <div class="swiper-wrapper">

                            @foreach ($posts_v as $post)
                            <div class="swiper-slide">
                                <div class="charter-item">
                                    @if ( ($loop->index % 4) === 0 )
                                    <div class="charter-thumb">
                                        <img src= {{asset("assets/images/charter/charter-5.png")}}  alt="charter">
                                    </div>      
                                    @endif
                                    @if ( ($loop->index % 4) === 1 )
                                    <div class="charter-thumb">
                                        <img src= {{asset("assets/images/charter/charter-8.png")}}  alt="charter">
                                    </div>      
                                    @endif
                                    @if ( ($loop->index % 4) === 2 )
                                    <div class="charter-thumb">
                                        <img src= {{asset("assets/images/charter/charter-9.png")}} alt="charter">
                                    </div>      
                                    @endif
                                    @if ( ($loop->index % 4) === 3 )
                                    <div class="charter-thumb">
                                        <img src={{asset("assets/images/charter/charter-10.png")}} alt="charter">
                                    </div>      
                                    @endif
                                  
                                    <div class="charter-content">
                                        <h3 class="title"><a href="deals-details.html">{{$post->title}}</a></h3>
                                        <span class="sub-title"> {{$post->kg}}  Kg </span>
                                        <div class="charter-meta">
                                            <span class="seat"> {{$post->city_starts}} - {{$post->city_ends}}</span>
                                            <span class="price">Price: {{$post->price}} / kg</span>
                                        </div>
                                        <div class="charter-btn">
                                            <a href="{{route('posts.show',[$post->slug(), $post])}}"><i class="icon-btn-icon-v2"></i> Savoir plus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                                
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Annonces voyageur
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


     <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Charter
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="charter-section pt-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-header-wrapper">
                        <div class="section-header">
                            <span class="sub-title text--base">Quelques annonces d'Expeditaires</span>
                            <h2 class="section-title">Annonces d'Expeditaires</h2>
                        </div>
                        <div class="slider-nav-area">
                            <div class="slider-prev">
                                <i class="fas fa-chevron-left"></i>
                            </div>
                            <div class="slider-next">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="charter-slider">
                        <div class="swiper-wrapper">

                            @foreach ($posts_ex as $post)
                            <div class="swiper-slide">
                                <div class="charter-item">
                                    @if ( ($loop->index % 4) === 0 )
                                    <div class="charter-thumb">
                                        <img src= {{asset("assets/images/charter/charter-11.png")}}  alt="charter">
                                    </div>      
                                    @endif
                                    @if ( ($loop->index % 4) === 1 )
                                    <div class="charter-thumb">
                                        <img src= {{asset("assets/images/charter/charter-12.png")}}  alt="charter">
                                    </div>      
                                    @endif
                                    @if ( ($loop->index % 4) === 2 )
                                    <div class="charter-thumb">
                                        <img src= {{asset("assets/images/charter/charter-13.png")}} alt="charter">
                                    </div>      
                                    @endif
                                    @if ( ($loop->index % 4) === 3 )
                                    <div class="charter-thumb">
                                        <img src={{asset("assets/images/charter/charter-14.png")}} alt="charter">
                                    </div>      
                                    @endif
                                  
                                    <div class="charter-content">
                                        <h3 class="title"><a href="deals-details.html">{{$post->title}}</a></h3>
                                        <span class="sub-title"> {{$post->kg}}  Kg </span>
                                        <div class="charter-meta">
                                            <span class="seat"> {{$post->city_starts}} - {{$post->city_ends}}</span>
                                            <span class="price">Price: {{$post->price}} / kg</span>
                                        </div>
                                        <div class="charter-btn">
                                            <a href="{{route('posts.show', [$post->slug(), $post])}}"><i class="icon-btn-icon-v2"></i> Savoir plus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                                
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Charter
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->



        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Client
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="client-section ptb-120">
        <div class="client-element">
            <img src="https://themeim.com/demo/flynext/assets/images/client/map.png" alt="map">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 text-center">
                    <div class="section-header">
                        <span class="sub-title">Témoignage sur <span>{{config('app.name')}}</span></span>
                        <h2 class="section-title">L'avis des utilisateurs</h2>
                    </div>
                </div>
            </div>
            <div class="client-area">
                <div class="row justify-content-center align-items-end mb-30-none">
                    <div class="col-xl-8 col-lg-8 col-md-6 mb-30">
                        <div class="client-slider-wrapper">
                            <div class="client-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="client-item">
                                            <div class="client-header">
                                                <div class="client-quote">
                                                    <img src="https://themeim.com/demo/flynext/assets/images/client/quote.png" alt="client">
                                                </div>
                                                <div class="client-thumb">
                                                    <img src="https://themeim.com/demo/flynext/assets/images/client/client-3.png" alt="client">
                                                </div>
                                            </div>
                                            <div class="client-content">
                                                <p>We teach martial arts because we love it — not because we want to
                                                    make money on you.</p>
                                            </div>
                                            <div class="client-footer">
                                                <div class="client-footer-left">
                                                    <h4 class="title"><a href="index.html#0">Randall Schwartz</a></h4>
                                                    <span class="sub-title">Sr. Consultant</span>
                                                </div>
                                                <div class="client-footer-right">
                                                    <span class="ratings">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star active"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-item">
                                            <div class="client-header">
                                                <div class="client-quote">
                                                    <img src="https://themeim.com/demo/flynext/assets/images/client/quote.png" alt="client">
                                                </div>
                                                <div class="client-thumb">
                                                    <img src="https://themeim.com/demo/flynext/assets/images/client/client-4.png" alt="client">
                                                </div>
                                            </div>
                                            <div class="client-content">
                                                <p>We teach martial arts because we love it — not because we want to
                                                    make money on you.</p>
                                            </div>
                                            <div class="client-footer">
                                                <div class="client-footer-left">
                                                    <h4 class="title">Andru Smith</h4>
                                                    <span class="sub-title">Marketing Manager</span>
                                                </div>
                                                <div class="client-footer-right">
                                                    <span class="ratings">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star active"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="client-right-thumb">
                            <img src="https://themeim.com/demo/flynext/assets/images/client/client-big.png" alt="client">
                            <div class="client-thumb-overlay">
                                <div class="video-main">
                                    <div class="promo-video">
                                        <div class="waves-block">
                                            <div class="waves wave-1"></div>
                                            <div class="waves wave-2"></div>
                                            <div class="waves wave-3"></div>
                                        </div>
                                    </div>
                                    <a class="video-icon" data-rel="lightcase:myCollection"
                                        href="https://www.youtube.com/embed/Hw4ctvV25H0">
                                        <i class="las la-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Client
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


@endsection
    