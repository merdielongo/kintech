
@extends('layouts.default')

@section('content')

<header class="relative flex items-center justify-center h-screen mb-12 overflow-hidden">

    <video
      autoplay
      loop
      muted
      class="absolute z-10 w-auto min-w-full min-h-full max-w-none" id="videoBanner"
    >
      <source
        src="{{ asset('img/thumb/1.mp4') }}"
        type="video/mp4"
      />
      Your browser does not support the video tag.
    </video>

    <div class="relative z-30">
        <div class="container p-5" style="background: rgba(0, 0, 0, 0.5)">

            <div class="mt-5 row">
                <div class="mt-5 col-lg-6 col-md-6">
                    <div class="p-3 text-white fw-bold text-uppercase">
                        KINTECH <br>
                        Edition 2021
                    </div>

                    <div class="p-4 mt-4 text-white text-uppercase fs-4">
                        Salon dédié <br> aux solutions numériques <br> pour la ville de Kinshasa
                    </div>

                    <div class="mt-5 row">
                        <div class="col-lg-6 col-md-6">
                            <a href="{{ route('home.register') }}" class="p-2 text-lg rounded-pill btn btn-primary w-100">Inscrivez vous</a>
                        </div>
                    </div>
                </div>

                <div class="mt-5 col-lg-6 col-md-6">
                    <span class="text-white fw-normal fs-5">Organisé par le commissariat provinciale en charge du numérique</span>
                    <div class="mt-3 row">
                        <div class="col-lg-12">
                            <div class="flex-row p-3 mb-2 border-0 d-flex" style="background: #A3386D">
                                <div class="text-white fas fa-check-circle fa-2x pe-4"></div>
                                <div class="text-white fw-bold">2 jours d’évènement</div>
                            </div>

                            <div class="flex-row p-3 mb-2 border-0 d-flex" style="background: #A3386D">
                                <div class="text-white fas fa-check fa-2x pe-4"></div>
                                <div class="text-white fw-bold">4 grandes conférences</div>
                            </div>

                            <div class="flex-row p-3 mb-2 border-0 d-flex" style="background: #A3386D">
                                <div class="text-white fas fa-check-circle fa-2x pe-4"></div>
                                <div class="text-white fw-bold">Des rencontres entre développeurs, start-ups et décideurs du secteur numérique</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </header>


<div class="p-3 mt-5 bg-white">
    <div class="p-4 row">
        <center>
            <div class="fs-4 fw-bold">
                <span>Innovation - Découverte - Partenariat</span>
            </div>
        </center>
    </div>
</div>

<div class="p-5 text-white" style="background: #8D3D89">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <img src="{{ asset('img/thumb/log.png') }}" alt="" class="w-100">
            </div>

            <div class="col-lg-6 col-md-6 d-flex align-items-center">
                <p class="fs-4"><b>KINTECH</b>, Partenaire public de l’entreprenariat numérique à Kinshasa.</p>
            </div>
        </div>
    </div>
</div>


<div class="container mt-3 mb-4">
    <div class="row">

        <div class="p-5 row">
            <center>
                <div class="fs-4">
                    <span>Participez à l’aventure</span>
                    <span><b>KINTECH !</b></span>
                </div>
            </center>
        </div>

        <div class="mb-4 col-lg-3 col-md-3">
            <div class="shadow-sm card">
                <div class="img-card-top">
                    <img src="{{ asset('img/thumb/t3.jpg') }}" alt="" class="w-100">
                </div>

                <div class="p-4 text-center card-content">
                    <p class="mt-1 fw-bold">Devenez sponsor <br><br> <br></p>
                    <a href="#" class="btn btn-danger">En savoir plus</a>
                </div>
                <br>
            </div>
        </div>

        <div class="mb-4 col-lg-3 col-md-3">
            <div class="shadow-sm card">
                <div class="img-card-top">
                    <img src="{{ asset('img/thumb/t2.jpg') }}" alt="" class="w-100">
                </div>

                <div class="p-4 text-center card-content">
                    <p class="mt-1 fw-bold">Inscrivez –vous en ligne gratuitement et participez à l’évènement en tant que visiteur </p>
                    <a href="#" class="btn btn-danger">En savoir plus</a>
                </div>
            </div>
        </div>

        <div class="mb-4 col-lg-3 col-md-3">
            <div class="shadow-sm card">
                <div class="img-card-top">
                    <img src="{{ asset('img/thumb/t1.jpg') }}" alt="" class="w-100">
                </div>

                <div class="p-4 text-center card-content">
                    <p class="mt-1 fw-bold">Devenez exposant. <br> <br> <br> </p>
                    <a href="#" class="btn btn-danger">En savoir plus</a>
                </div>
            </div>
        </div>


        <div class="mb-4 col-lg-3 col-md-3">
            <div class="shadow-sm card">
                <div class="img-card-top">
                    <img src="{{ asset('img/thumb/4.jpg') }}" alt="" class="w-100">
                </div>
            </div>
        </div>


    </div>
</div>


<div class="pt-5 pb-5">
    <div class="container pt-2 pb-2">
        <div class="row">
            <center>
                <span class="text-2xl font-bold">EDITION 2021</span> <br>
            </center>
        </div><br><br><br>

        <div class="row">
            <div class="mb-5 col-lg-3 col-md-3">
                <div id="card-intervenant rounded-3">
                    <div class="mt-2 border-0 card rounded-2xl">
                        <div class="card-body">
                            <br><h5 class="font-bold text-center card-title">Vélocité</h5> <br>
                            <p class="mb-4 text-center card-text">Transformation Numérique à Vitesse Grand V</p>
                        </div>
                        <div class="p-1 rounded-b-2xl" style="background: #8D3D89"></div>
                    </div>
                </div>
            </div>

            <div class="mb-5 col-lg-3 col-md-3">
                <div id="card-intervenant rounded-3">
                    <div class="mt-2 border-0 card">
                        <div class="card-body">
                            <br><h5 class="font-bold text-center card-title">Découverte</h5> <br>
                            <p class="mb-4 text-center card-text">Ensemble créons nos propres Solutions</p>
                        </div>
                        <div class="p-1 rounded-b-2xl" style="background: #8D3D89"></div>
                    </div>
                </div>
            </div>

            <div class="mb-5 col-lg-3 col-md-3">
                <div id="card-intervenant rounded-3">
                    <div class="mt-2 border-0 card rounded-2xl">
                        <div class="card-body">
                            <br><h5 class="font-bold text-center card-title">Innovation</h5> <br>
                            <p class="text-center card-text">Ensemble mettons en avant la Technologie, la Technicité et la Créativité</p>
                        </div>
                        <div class="p-1 rounded-b-2xl" style="background: #8D3D89"></div>
                    </div>
                </div>
            </div>

            <div class="mb-5 col-lg-3 col-md-3">
                <div id="card-intervenant rounded-3">
                    <div class="mt-2 border-0 card rounded-2xl">
                        <div class="card-body">
                            <br><h5 class="font-bold text-center card-title">Avenir</h5> <br>
                            <p class="mb-4 text-center card-text">Créons notre propre Patrimoine Intellectuel</p>
                        </div>
                        <div class="p-1 rounded-b-2xl" style="background: #8D3D89"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div style="background: #A3386D">
    <div class="container pt-2 pb-2">
        <div class="text-white row">
            <div class="p-5 col-lg-4 col-md-4 offset-lg-4 offset-md-4">
                <img class="w-100 rounded-2xl" src="{{ asset('img/thumb/gou.jpeg') }}" alt="">
                <p class="mt-4 text-sm font-semibold text-left">
                    “Sous le patronnage de SEM Gentiny Ngobila Mbaka, Gouverneur de la ville de kinshasa”
                </p>
            </div>

        </div>
    </div>
</div>

<div id="wrapper">
    <img src="{{ asset('img/thumb/yvette-01.jpg') }}" alt="">
</div>

<div class="pt-5 pb-5">
    <div class="container pt-2 pb-2">
        <div class="row">
            <center><span class="text-3xl font-bold">Nos partenaires</span></center>
        </div><br><br>

        <div class="row">
            <div class="mb-4 col-lg-3 col-md-3">
                <div class="border-0 card">
                    <div class="card-body">
                        <div class="card-text">
                            <img src="{{ asset('img/thumb/ville.png') }}" alt="" class="p-5">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4 col-lg-3 col-md-3">
                <div class="border-0 card">
                    <div class="card-body">
                        <div class="card-text">
                            <img src="{{ asset('img/thumb/apdnk.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4 col-lg-3 col-md-3">
                <div class="border-0 bg-danger">
                    <div class="card-body">
                        <div class="card-text">
                            <img src="{{ asset('img/thumb/credo.svg') }}" alt="" class="p-5">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4 col-lg-3 col-md-3">
                <div class="border-0 card">
                    <div class="card-body">
                        <div class="card-text">
                            <img src="{{ asset('img/thumb/apdnk.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
