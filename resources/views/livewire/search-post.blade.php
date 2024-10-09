<div>


       <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Book-form
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="book-form-section ptb-120">
        <div class="container">
            <div class="book-form-area bg-overlay-black bg_img" data-background="assets/images/bg/bg-3.png">
                <div class="row justify-content-center">
                    <div class="col-xl-12 text-center">
                        <div class="section-header white">
                            <span class="sub-title text-white"><span>DOGANDO</span> Filtre </span>
                            <h2 class="section-title"> Trouver l'annonce à votre exigence </h2>
                        </div>
                        <form class="book-form">
                            <div class="row justify-content-center mb-20-none">

                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                    <label>Poids (kg)</label>
                                    <div class="book-quantity">
                                        <div class="book-plus-minus">
                                            <div class="dec qtybutton">-</div>
                                            <input class="book-plus-minus-box qty" type="number" name="kg" wire:model.live.debounce.250ms="kg"
                                            >
                                            <div class="inc qtybutton">+</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                    <label>Prix / kg</label>
                                    <div class="book-quantity">
                                        <div class="book-plus-minus">
                                            <input class="book-plus-minus-box qty" type="text" name="price"  wire:model.live.debounce.250ms="price"
                                                >
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                    <label>From</label>
                                    <div class="book-form-icon">
                                        <i class="icon-from-airplane"></i>
                                    </div>
                                    <div class="book-quantity">
                                        <div class="book-plus-minus">
                                            <input class="book-plus-minus-box qty" type="text" name="city_starts"  wire:model.live.debounce.250ms="city_starts"
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                    <label>To</label>
                                    <div class="book-form-icon">
                                        <i class="icon-to-airplane"></i>
                                    </div>
                                    <div class="book-quantity">
                                        <div class="book-plus-minus">
                                            <input class="book-plus-minus-box qty" type="text" name="city_ends"  wire:model.live.debounce.250ms="city_ends"
                                            >
                                        </div>
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
    End Book-form
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        @dump($posts)


        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Charter
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="charter-section pt-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-header-wrapper">
                        <div class="section-header">
                            <span class="sub-title text--base">Annonces de Voyageurs</span>
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

                            @foreach ($posts as $post)
                            <div class="swiper-slide">
                                <div class="charter-item">
                                    <div class="charter-thumb">
                                        <img src="assets/images/charter/charter-5.png" alt="charter">
                                    </div>
                                    <div class="charter-content">
                                        <h3 class="title"><a href="deals-details.html">{{$post->kg}}kg    P-{{$post->price}}/kg</a></h3>
                                        <span class="sub-title">Private Jet</span>
                                        <div class="charter-meta">
                                            <span class="seat">8 - 14 Seats</span>
                                            <span class="price">Price: $9,000/ hr</span>
                                        </div>
                                        <div class="charter-btn">
                                            <a href="service-details.html"><i class="icon-btn-icon-v2"></i> Book
                                                Now</a>
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
        Start Charter
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="charter-section pt-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-header-wrapper">
                        <div class="section-header">
                            <span class="sub-title text--base">Annonces d'Expeditaires</span>
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
            <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1200">
                <div class="col-xl-12">
                    <div class="charter-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="charter-item">
                                    <div class="charter-thumb">
                                        <img src="assets/images/charter/charter-9.png" alt="charter">
                                    </div>
                                    <div class="charter-content">
                                        <h3 class="title"><a href="deals-details.html">Embraer P-300E</a></h3>
                                        <span class="sub-title">Private Jet</span>
                                        <div class="charter-meta">
                                            <span class="seat">8 - 14 Seats</span>
                                            <span class="price">Price: $9,000/ hr</span>
                                        </div>
                                        <div class="charter-btn">
                                            <a href="service-details.html"><i class="icon-btn-icon-v2"></i>Contacter
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="charter-item">
                                    <div class="charter-thumb">
                                        <img src="assets/images/charter/charter-10.png" alt="charter">
                                    </div>
                                    <div class="charter-content">
                                        <h3 class="title"><a href="deals-details.html">Cessna Citation CJ2</a></h3>
                                        <span class="sub-title">Private Jet</span>
                                        <div class="charter-meta">
                                            <span class="seat">8 - 14 Seats</span>
                                            <span class="price">Price: $9,000/ hr</span>
                                        </div>
                                        <div class="charter-btn">
                                            <a href="service-details.html"><i class="icon-btn-icon-v2"></i> Contacter
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="charter-item">
                                    <div class="charter-thumb">
                                        <img src="assets/images/charter/charter-11.png" alt="charter">
                                    </div>
                                    <div class="charter-content">
                                        <h3 class="title"><a href="deals-details.html">Gulfstream G150</a></h3>
                                        <span class="sub-title">Private Jet</span>
                                        <div class="charter-meta">
                                            <span class="seat">8 - 14 Seats</span>
                                            <span class="price">Price: $9,000/ hr</span>
                                        </div>
                                        <div class="charter-btn">
                                            <a href="service-details.html"><i class="icon-btn-icon-v2"></i> Contacter
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="charter-item">
                                    <div class="charter-thumb">
                                        <img src="assets/images/charter/charter-12.png" alt="charter">
                                    </div>
                                    <div class="charter-content">
                                        <h3 class="title"><a href="deals-details.html">Bonanza 36</a></h3>
                                        <span class="sub-title">Private Jet</span>
                                        <div class="charter-meta">
                                            <span class="seat">8 - 14 Seats</span>
                                            <span class="price">Price: $9,000/ hr</span>
                                        </div>
                                        <div class="charter-btn">
                                            <a href="service-details.html"><i class="icon-btn-icon-v2"></i> Contacter
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Charter
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
</div>
