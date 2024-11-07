<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="TechyDevs" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title> {{$post->exists ?  config('app.name').'-Modifier une annonce' : config('app.name'). '-Creer une annonce' }} </title>
    <!-- Favicon -->
    <link rel="shortcut icon" href=" {{asset('assets/images/fav.png')}} " type="image/x-icon">

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
      rel="stylesheet"
    />

    <!-- Template CSS Files -->
    <link rel="stylesheet" href=" {{asset('css/bootstrap.min.css')}} " />
    <link rel="stylesheet" href=" {{asset('css/select2.min.css')}} " />
    <link rel="stylesheet" href=" {{asset('css/line-awesome.css')}} " />
    <link rel="stylesheet" href=" {{asset('css/owl.carousel.min.css')}} " />
    <link rel="stylesheet" href=" {{asset('css/owl.theme.default.min.css')}} "/>
    <link rel="stylesheet" href=" {{asset('css/jquery.fancybox.min.css')}}" />
    <link rel="stylesheet" href=" {{asset('css/daterangepicker.css')}}" />
    <link rel="stylesheet" href=" {{asset('css/animate.min.css')}}" />
    <link rel="stylesheet" href=" {{asset('css/animated-headline.css')}}" />
    <link rel="stylesheet" href=" {{asset('css/jquery-ui.css')}}" />
    <link rel="stylesheet" href=" {{asset('css/flag-icon.min.css')}}" />
    <link rel="stylesheet" href=" {{asset('css/style.css')}}" />
  </head>
  <body>
    <!-- start cssload-loader -->
    <div class="preloader" id="preloader">
      <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
          <circle
            class="path"
            cx="25"
            cy="25"
            r="20"
            fill="none"
            stroke-width="5"
          ></circle>
        </svg>
      </div>
    </div>
    <!-- end cssload-loader -->

    <!-- ================================
            START HEADER AREA

    <!-- ================================
    START HERO-WRAPPER AREA
================================= -->
    <section class="hero-wrapper">
      <div class="hero-box hero-bg">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 mx-auto responsive--column-l">
              <div class="hero-content pb-5">
                <div class="section-heading">
                  <h2 class="sec__title cd-headline zoom">
                    D'incroyables
                    <span class="cd-words-wrapper">
                      <b class="is-visible">opportunités</b>
                      <b>aventures</b>
                      <b>aubaines</b>
                      <b>occasions</b>
                      <b>relations</b>
                      <b>affaires</b>
                      <b>réseaux</b>
                      <b>personnes</b>
                    </span>
                    vous attendent
                  </h2>
                </div>
              </div>

              <!-- end hero-content -->
              <div class="section-tab text-center ps-4">
                <ul class="nav nav-tabs" id="myTab" role="tablist">

                  @if ($post->exists)

                    @if ($post->type == 1)
                    <li class="nav-item">
                      <a
                        class="nav-link d-flex align-items-center active"
                        id="flight-tab"
                        data-bs-toggle="tab"
                        href="#flight"
                        role="tab"
                        aria-controls="flight"
                        aria-selected="true"
                      >
                        <i class="la la-plane me-1"></i>Voyage
                      </a>
                    </li>  
                    @else
                    <li class="nav-item">
                      <a
                        class="nav-link d-flex align-items-center"
                        id="hotel-tab"
                        data-bs-toggle="tab"
                        href="#hotel"
                        role="tab"
                        aria-controls="hotel"
                        aria-selected="true"
                      >
                        <i class="la la-hotel me-1"></i>Expedition
                      </a>
                    </li>     
                    @endif
                      
                  @else

                  <li class="nav-item">
                    <a
                      class="nav-link d-flex align-items-center active"
                      id="flight-tab"
                      data-bs-toggle="tab"
                      href="index.html#flight"
                      role="tab"
                      aria-controls="flight"
                      aria-selected="true"
                    >
                      <i class="la la-plane me-1"></i>Voyage
                    </a>
                  </li>

                  <li class="nav-item">
                    <a
                      class="nav-link d-flex align-items-center"
                      id="hotel-tab"
                      data-bs-toggle="tab"
                      href="index.html#hotel"
                      role="tab"
                      aria-controls="hotel"
                      aria-selected="false"
                    >
                      <i class="la la-hotel me-1"></i>Expedition
                    </a>
                  </li>
                  @endif
                 
                </ul>
              </div>
              <!-- end section-tab -->

              <div class="tab-content search-fields-container" id="myTabContent" >

                <div
                  class="tab-pane fade {{$post->exists && $post->type == 1 ? "show active" : ""}} {{!$post->exists ? "show active" : ""}} "
                  id="flight"
                  role="tabpanel"
                  aria-labelledby="flight-tab"
                >
                  <div class="section-tab section-tab-2 pb-3">
                    <ul class="nav nav-tabs" id="myTab3" role="tablist">
                      <li class="nav-item">
                        <a
                          class="nav-link active"
                          id="one-way-tab"
                          data-bs-toggle="tab"
                          href="index.html#one-way"
                          role="tab"
                          aria-controls="one-way"
                          aria-selected="true"
                        >
                          V
                        </a>
                      </li>
                    </ul>
                  </div>

                  <!-- end section-tab -->
                  <div class="tab-content" id="myTabContent3">
                    <div
                      class="tab-pane fade show active"
                      id="one-way"
                      role="tabpanel"
                      aria-labelledby="one-way-tab"
                    >
                      <div class="contact-form-action">
                        <form action="{{route($post->exists ? 'posts.update' : 'posts.store', $post)}}" method="POST" class="row align-items-center">
                          @csrf

                          @if ($post->exists)
                              @method('PUT')
                          @endif

                          <div class="col-lg-6 pe-0">
                            <div class="input-box">
                              <label for="title" class="label-text">Titre : </label>
                              <div class="form-group">
                                <input
                                  {{$post->exists ? 'readonly' : '' }}
                                  name="title"
                                  id="title"
                                  value="{{old('title', $post->title)}}"
                                  class="form-control"
                                  type="text"
                                  placeholder="Titre"
                                />
                                @error('title')
                                <div class="alert alert-danger" >
                                  {{$message}}
                                </div>  
                                @enderror
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 pe-0">
                            <div class="input-box">
                              <label for="description" class="label-text">Description : </label>
                              <div class="form-group">
                                <input
                                  {{$post->exists ? 'readonly' : '' }}
                                  name="description"
                                  id="description"*
                                  value="{{old('description', $post->description)}}"
                                  class="form-control"
                                  type="text"
                                  placeholder="Description"
                                />
                                @error('description')
                                <div class="alert alert-danger" >
                                  {{$message}}
                                </div>
                                @enderror
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 pe-0">
                            <div class="input-box">
                              <label for="kg" class="label-text">Kilos : </label>
                              <div class="form-group">
                                <input
                                  {{$post->exists ? 'readonly' : '' }}

                                  name="kg"
                                  id="kg"
                                  value="{{old('kg', $post->kg)}}"
                                  class="form-control"
                                  type="text"
                                  placeholder="Kilos"
                                />
                                @error('kg')
                                    <div class="alert alert-danger" >
                                      {{$message}}
                                    </div>
                                @enderror
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-3 -->
                          <div class="col-lg-6">
                            <div class="input-box">
                              <label for="price" class="label-text">Prix/kg : </label>
                              <div class="form-group">
                                <input
                                  {{$post->exists ? 'readonly' : '' }}

                                  name="price"
                                  id="price"
                                  value="{{old('price', $post->price)}}"
                                  class="form-control"
                                  type="text"
                                  placeholder="Prix par kilogramme"
                                />
                                @error('price')
                                    <div class="alert alert-danger" >
                                      {{$message}}
                                    </div>
                                @enderror
                              </div>
                            </div>
                          </div>           <!-- end col-lg-3 -->

                          <div class="col-lg-6 pe-0">
                            <div class="input-box">
                              <label  for="transport" class="label-text"> Moyen de Transport : </label>
                              <div
                                class="form-group select-contain select2-container-wrapper w-auto"
                              >
                                <select name="m_transport" id="transport"  class="select-contain-select">
  
                                  @foreach ($transports as $transport)
                                  <option value="{{$transport}}"  {{ $post->m_transport == $transport ? 'selected' : '' }} >
                                     {{ ucfirst($transport) }} 
                                  </option>
                                  @endforeach
          
                                </select>
  
                                @error('m_transport')
                                  <div class="alert alert-danger" >
                                    {{$message}}
                                  </div>
                                @enderror
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-6 pe-0">
                            <div class="input-box">
                              <label for="cityInput" class="label-text">Ville de depart : </label>
                              <div class="form-group">
                                <span class="la la-map-marker form-icon"></span>
                                <input
                                  {{$post->exists ? 'readonly' : '' }}

                                  name="city_starts"
                                  value="{{old('city_starts', $post->city_starts)}}"
                                  class="form-control cityInput"
                                  type="text"
                                  placeholder="Entrez une ville" 
                                  autocomplete="off"
                                />

                                <ul id="suggestions" style="list-style: none; padding: 0; margin-top: 5px; background-color: #fff; border: 1px solid #fff; max-width: 300px;"></ul>

                                @error('city_starts')
                                    <div class="alert alert-danger" >

                                    </div>
                                @enderror
                              </div>
                            </div>
                          </div>        <!-- end col-lg-3 -->

                          <div class="col-lg-6 pe-0">
                            <div class="input-box">
                              <label for="city_ends" class="label-text">Ville d'arrivée : </label>
                              <div class="form-group">
                                <span class="la la-map-marker form-icon"></span>
                                <input
                                  {{$post->exists ? 'readonly' : '' }}

                                  name="city_ends"
                                  id="city_ends"
                                  value="{{old('city_ends', $post->city_ends)}}"
                                  class="form-control cityInput"
                                  type="text"
                                  placeholder="City or airport"
                                />
                                <ul id="suggestions" style="list-style: none; padding: 0; margin-top: 5px; background-color: #fff; border: 1px solid #fff; max-width: 300px;"></ul>

                                @error('city_ends')
                                    <div class="alert alert-danger" >
                                      {{$message}}
                                    </div>
                                @enderror
                              </div>
                            </div>
                          </div>    <!-- end col-lg-3 -->

                          <div class="col-lg-6 pe-0">
                            <div class="input-box">
                              <label for="company" class="label-text">Compagnie : </label>
                              <div class="form-group">
                                <span class="la la-map-marker form-icon"></span>
                                <input
                                  name="company"
                                  id="company"
                                  value="{{old('company', $post->company)}}"
                                  class="form-control"
                                  type="text"
                                  placeholder="Compagnie"
                                />
                                @error('company')
                                    <div class="alert alert-danger" >
                                      {{$message}}
                                    </div>
                                @enderror
                              </div>
                            </div>
                          </div>     <!-- end col-lg-3 -->

                          <div class="col-lg-6 pe-0">
                            <div class="input-box">
                              <label for="starts_at" class="label-text">Date depart : </label>
                              <div class="form-group">
                                <span class="la la-calendar form-icon"></span>
                                <input
                                  name="starts_at"
                                  id="starts_at"
                                  value="{{old('starts_at', $post->starts_at)}}"
                                  class="date-range form-control"
                                  type="datetime-local"
                                  name="daterange-single"
                                />
                                @error('starts_at')
                                    <div class="alert alert-danger" >
                                      {{$message}}
                                    </div>
                                @enderror
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-3 -->
                          <div class="col-lg-6 pe-0">
                            <div class="input-box">
                              <label for="ends_at" class="label-text">Date arrivée : </label>
                              <div class="form-group">
                                <span class="la la-calendar form-icon"></span>
                                <input
                                  name="ends_at"
                                  id="ends_at"
                                  value="{{old('ends_at', $post->ends_at)}}"
                                  class="date-range form-control"
                                  type="datetime-local"
                                  name="daterange-single"
                                />
                                @error('ends_at')
                                    <div class="alert alert-danger" >
                                      {{$message}}
                                    </div>
                                @enderror
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-6 -->
                          <div class="col-lg-6 pe-0">
                            <div class="input-box">
                              <div class="form-group">
                                <input
                                  name="type"
                                  value="1"
                                  class="form-control"
                                  type="hidden"
                                />
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-3 -->
                          <div class="col-lg-3">
                            <button  class="theme-btn w-100 text-center margin-top-20px" > @if ($post->exists) Modifier @else Ajouter @endif </button>
                          </div>
                        </form>
                      </div>
                    </div>
                    <!-- end tab-pane -->
                  </div>
                
                
                </div>                          <!-- end tab-pane   Form voyage-->  

                <div
                  class="tab-pane fade {{$post->exists && $post->type == 0 ? "show active" : ""}} " 
                  id="hotel"
                  role="tabpanel"
                  aria-labelledby="hotel-tab"
                >
                  <div class="section-tab section-tab-2 pb-3">
                    <ul class="nav nav-tabs" id="myTab3" role="tablist">
                      <li class="nav-item">
                        <a
                          class="nav-link active"
                          id="one-way-tab"
                          data-bs-toggle="tab"
                          href="index.html#one-way"
                          role="tab"
                          aria-controls="one-way"
                          aria-selected="true"
                        >
                          Ex
                        </a>
                      </li>
                    </ul>
                  </div>

                  <!-- end section-tab -->
                  <div class="tab-content" id="myTabContent3">
                    <div
                      class="tab-pane fade show active"
                      id="one-way"
                      role="tabpanel"
                      aria-labelledby="one-way-tab"
                    >
                      <div class="contact-form-action">
                        <form action="{{route($post->exists ? 'posts.update' : 'posts.store', $post)}}" method="POST" class="row align-items-center">
                          @csrf
                          @if ($post->exists)
                            @method('PUT')
                          @endif

                          <div class="col-lg-6 pe-0">
                            <div class="input-box">
                              <label for="title" class="label-text">Titre</label>
                              <div class="form-group">
                                <input
                                  {{$post->exists ? 'readonly' : '' }}

                                  name="title"
                                  id="title"
                                  value="{{old('title', $post->title)}}"
                                  class="form-control"
                                  type="text"
                                  placeholder="Titre"
                                />
                                @error('title')
                                <div class="alert alert-danger" >
                                  {{$message}}
                                </div>  
                                @enderror
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 pe-0">
                            <div class="input-box">
                              <label for="description" class="label-text">Description</label>
                              <div class="form-group">
                                <input
                                  {{$post->exists ? 'readonly' : '' }}

                                  name="description"
                                  id="description"*
                                  value="{{old('description', $post->description)}}"
                                  class="form-control"
                                  type="text"
                                  placeholder="Description"
                                />
                                @error('description')
                                <div class="alert alert-danger" >
                                  {{$message}}
                                </div>
                                @enderror
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 pe-0">
                            <div class="input-box">
                              <label for="kg" class="label-text">Kilos</label>
                              <div class="form-group">
                                <input
                                  {{$post->exists ? 'readonly' : '' }}

                                  name="kg"
                                  id="kg"
                                  value="{{old('kg', $post->kg)}}"
                                  class="form-control"
                                  type="text"
                                  placeholder="Kilos"
                                />
                                @error('kg')
                                  <div class="alert alert-danger" >
                                    {{$message}}
                                  </div>
                                @enderror
                              </div>
                            </div>
                          </div>  <!-- end col-lg-3 -->

                          <div class="col-lg-6 pe-0">
                            <div class="input-box">
                              <div class="form-group">
                                <input
                                  name="type"
                                  value="0"
                                  class="form-control"
                                  type="hidden"
                                />
                              </div>
                            </div>
                          </div>           <!-- end col-lg-3 -->

                          <div class="col-lg-6 pe-0">
                            <div class="input-box">
                              <label  for="m_transport" class="label-text"> Moyen de Transport </label>
                              <div
                                class="form-group select-contain select2-container-wrapper w-auto"
                              >
                                <select name="m_transport" id="m_transport"  class="select-contain-select">
  
                                  @foreach ($transports as $transport)
                                  <option value="{{$transport}}"  {{ $post->m_transport == $transport ? 'selected' : '' }} >
                                     {{ ucfirst($transport) }} 
                                  </option>
                                  @endforeach
          
                                </select>
  
                                @error('m_transport')
                                  <div class="alert alert-danger" >
                                    {{$message}}
                                  </div>
                                @enderror
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-6 pe-0">
                            <div class="input-box">
                              <label for="city_starts" class="label-text">Ville de depart</label>
                              <div class="form-group">
                                <span class="la la-map-marker form-icon"></span>
                                <input
                                  name="city_starts"
                                  id="city_starts"
                                  value="{{old('city_starts', $post->city_starts)}}"
                                  class="form-control cityInput"
                                  type="text"
                                  placeholder=""
                                />

                                <ul id="suggestions" style="list-style: none; padding: 0; margin-top: 5px; background-color: #fff; border: 1px solid #fff; max-width: 300px;"></ul>


                                @error('city_starts')
                                  <div class="alert alert-danger" >
                                    {{$message}}
                                  </div>
                                @enderror
                              </div>
                            </div>
                          </div>        <!-- end col-lg-3 -->

                          <div class="col-lg-6 pe-0">
                            <div class="input-box">
                              <label for="city_ends" class="label-text">Ville d'arrivée</label>
                              <div class="form-group">
                                <span class="la la-map-marker form-icon"></span>
                                <input
                                {{$post->exists ? 'readonly' : '' }}

                                  name="city_ends"
                                  id="city_ends"
                                  value="{{old('city_ends', $post->city_ends)}}"
                                  class="form-control cityInput"
                                  type="text"
                                  placeholder="City or airport"
                                />

                                <ul id="suggestions" style="list-style: none; padding: 0; margin-top: 5px; background-color: #fff; border: 1px solid #fff; max-width: 300px;"></ul>

                                @error('city_ends')
                                  <div class="alert alert-danger" >
                                    {{$message}}
                                  </div>
                                @enderror
                              </div>
                            </div>
                          </div>         <!-- end col-lg-3 -->

                          <div class="col-lg-3">
                            <button  class="theme-btn w-100 text-center margin-top-20px" > @if ($post->exists) Modifier @else Ajouter @endif</button>
                          </div>
                        </form>
                    </div>
                  </div>
                  <!-- end tab-pane -->
                </div>
                </div>                         <!-- end tab-pane  Form Expedition -->
                                
              </div>
            </div>
            <!-- end col-lg-12 -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
        <svg
          class="hero-svg"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 100 10"
          preserveAspectRatio="none"
        >
          <path d="M0 10 0 0 A 90 59, 0, 0, 0, 100 0 L 100 10 Z"></path>
        </svg>
      </div>
    </section>
    <!-- end hero-wrapper -->
    <!-- ================================
    END HERO-WRAPPER AREA
================================= -->

<script>
  // Sélectionner tous les champs avec la classe 'cityInput'
  const cityInputs = document.querySelectorAll('.cityInput');

  cityInputs.forEach(cityInput => {
      const suggestions = cityInput.nextElementSibling; // Récupère le ul juste après le champ

      cityInput.addEventListener('input', async function() {
          const query = cityInput.value.trim();
          if (query.length > 2) { // Commencer la recherche après 2 caractères
              try {
                  const response = await fetch(`https://api.locationiq.com/v1/autocomplete.php?key=pk.86921e70717280748f0c71cabd9526ce&q=${query}&limit=5&format=json`);
                  const data = await response.json();
                  showSuggestions(data, suggestions, cityInput);
              } catch (error) {
                  console.error("Erreur lors de la récupération des données:", error);
              }
          } else {
              suggestions.innerHTML = ''; // Vider les suggestions si l'utilisateur efface le texte
          }
      });
  });

  function showSuggestions(cities, suggestionsContainer, inputField) {
      suggestionsContainer.innerHTML = ''; // Vider la liste des suggestions
      cities.forEach(city => {
          if (city.type === "city") { // Filtrer pour ne garder que les villes
              const li = document.createElement('li');
              li.textContent = `${city.display_name.split(",")[0]} (${city.address.country})`;
              li.style.cursor = 'pointer';
              li.addEventListener('click', () => {
                  inputField.value = `${city.display_name.split(",")[0]} (${city.address.country})`;
                  suggestionsContainer.innerHTML = ''; // Effacer les suggestions une fois sélectionnée
              });
              suggestionsContainer.appendChild(li);
          }
      });
  }
</script>
  
    <!-- Template JS Files -->
    <script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>

    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="j{{asset('s/moment.min.js')}}"></script>
    <script src="{{asset('js/daterangepicker.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('js/jquery.countTo.min.js')}}"></script>
    <script src="{{asset('js/animated-headline.js')}}"></script>
    <script src="j{{asset('s/jquery.ripples-min.js')}}"></script>
    <script src="{{asset('js/quantity-input.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
  </body>
</html>
