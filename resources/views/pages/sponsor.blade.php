@extends('layouts.default')

@section('content')


    <div class="container mt-5">
        <div class="row">

            <div class="mb-4 col-lg-3 col-md-3">
                <div class="border-0 rounded-sm card">
                    <div class="card-body">
                        <h5 class="p-3 mt-4 mb-4 font-black text-center text-white uppercase rounded-full bg-info card-title">Bronze
                            <span class="text-lg rounded-full badge bg-info">2.500$</span>
                        </h5>
                        <div class="container mb-3 text-center">

                        </div>
                        <ul class="text-sm list-group list-group-flush">
                            <li class="list-group-item">sponsor officielle: <b>NON</b></li>
                            <li class="list-group-item">Exclusivité sectorielle : <b>NON</b></li>
                            <li class="list-group-item">comptoir de présentation : <b>OUI</b></li>
                            <li class="list-group-item">branding site roll-up : <b>1</b></li>
                            <li class="list-group-item">Logo écran : <b>OUI</b></li>
                            <li class="list-group-item">Logo sur spot tv et animatic : <b>OUI</b></li>
                            <li class="list-group-item">Visibilités sur la plateforme : <b>OUI</b></li>
                            <li class="list-group-item">Logo sur invitations : <b>NON</b></li>
                            <li class="list-group-item">Logo sur badges : <b>OUI</b></li>
                            <li class="list-group-item">Logo sur programme : <b>OUI</b></li>
                            <li class="list-group-item">Présence sur le site internet : <b>OUI</b></li>
                            <li class="list-group-item">Logo sur billboards : <b>OUI</b></li>
                            <li class="list-group-item">Logo sur banderoles : <b>OUI</b></li>
                            <li class="list-group-item">Logo sur élément de décorations : <b>NON</b></li>
                            <li class="list-group-item">Invitations : <b>3</b></b></li>
                        </ul>
                        <a href="{{ route('home.sponsoring', 1) }}" class="mt-3 rounded-full w-100 btn btn-info rounded-pill">Selectionnez</a>
                    </div>
                </div>
            </div>

            <div class="mb-4 col-lg-3 col-md-3">
                <div class="border-0 rounded-sm card">
                    <div class="card-body">
                        <h5 class="p-3 mt-4 mb-4 font-black text-center text-white uppercase rounded-full bg-info card-title">Gold
                            <span class="text-lg rounded-full badge bg-info">5.000$</span>
                        </h5>
                        <div class="container mb-3 text-center">

                        </div>
                        <ul class="text-sm list-group list-group-flush">
                            <li class="list-group-item">sponsor officielle: <b>NON</b></li>
                            <li class="list-group-item">Exclusivité sectorielle : <b>NON</b></li>
                            <li class="list-group-item">comptoir de présentation : <b>OUI</b></li>
                            <li class="list-group-item">branding site roll-up : <b>2</b></li>
                            <li class="list-group-item">Logo écran : <b>OUI</b></li>
                            <li class="list-group-item">Logo sur spot tv et animatic : <b>OUI</b></li>
                            <li class="list-group-item">Visibilités sur la plateforme : <b>OUI</b></li>
                            <li class="list-group-item">Logo sur invitations : <b>OUI</b></li>
                            <li class="list-group-item">Logo sur badges : <b>NON</b></li>
                            <li class="list-group-item">Logo sur programme : <b>OUI</b></li>
                            <li class="list-group-item">Présence sur le site internet : <b>OUI</b></li>
                            <li class="list-group-item">Logo sur billboards : <b>NON</b></li>
                            <li class="list-group-item">Logo sur banderoles : <b>OUI</b></li>
                            <li class="list-group-item">Logo sur élément de décorations : <b>NON</b></li>
                            <li class="list-group-item">Invitations : <b>3</b></b></li>
                        </ul>
                        <a href="{{ route('home.sponsoring', 1) }}" class="mt-3 rounded-full w-100 btn btn-info rounded-pill">Selectionnez</a>
                    </div>
                </div>
            </div>

            <div class="mb-4 col-lg-3 col-md-3">
                <div class="border-0 rounded-sm card">
                    <div class="card-body">
                        <h5 class="p-3 mt-4 mb-4 font-black text-center text-white uppercase rounded-full bg-info card-title">SILVER
                            <span class="text-lg rounded-full badge bg-info">8.000$</span>
                        </h5>
                        <div class="container mb-3 text-center">

                        </div>
                        <ul class="text-sm list-group list-group-flush">
                            <li class="list-group-item">sponsor officielle: <b>OUI</b></li>
                            <li class="list-group-item">Exclusivité sectorielle : <b>NON</b></li>
                            <li class="list-group-item">comptoir de présentation : <b>OUI</b></li>
                            <li class="list-group-item">branding site roll-up : <b>4</b></li>
                            <li class="list-group-item">Logo écran : <b>OUI</b></li>
                            <li class="list-group-item">Logo sur spot tv et animatic : <b>OUI</b></li>
                            <li class="list-group-item">Visibilités sur la plateforme : <b>OUI</b></li>
                            <li class="list-group-item">Logo sur invitations : <b>OUI</b></li>
                            <li class="list-group-item">Logo sur badges : <b>OUI</b></li>
                            <li class="list-group-item">Logo sur programme : <b>OUI</b></li>
                            <li class="list-group-item">Présence sur le site internet : <b>OUI</b></li>
                            <li class="list-group-item">Logo sur billboards : <b>OUI</b></li>
                            <li class="list-group-item">Logo sur banderoles : <b>OUI</b></li>
                            <li class="list-group-item">Logo sur élément de décorations : <b>OUI</b></li>
                            <li class="list-group-item">Invitations : <b>5</b></b></li>
                        </ul>
                        <a href="{{ route('home.sponsoring', 1) }}" class="mt-3 rounded-full w-100 btn btn-info rounded-pill">Selectionnez</a>
                    </div>
                </div>
            </div>
            <div class="mb-4 col-lg-3 col-md-3">
                <div class="border-0 rounded-sm card">
                    <div class="card-body">
                        <h5 class="p-3 mt-4 mb-4 font-black text-center text-white uppercase rounded-full bg-info card-title">PLATINIUM
                            <span class="text-lg rounded-full badge bg-info">10.000$</span>
                        </h5>
                        <div class="container mb-3 text-center">

                        </div>
                        <ul class="text-sm list-group list-group-flush">
                            <li class="list-group-item">sponsor officielle: <b>OUI</b></li>
                            <li class="list-group-item">Exclusivité sectorielle : <b>OUI</b></li>
                            <li class="list-group-item">comptoir de présentation : <b>OUI</b></li>
                            <li class="list-group-item">branding site roll-up : <b>4</b></li>
                            <li class="list-group-item">Logo écran : <b>OUI</b></li>
                            <li class="list-group-item">Logo sur spot tv et animatic : <b>OUI</b></li>
                            <li class="list-group-item">Visibilités sur la plateforme : <b>OUI</b></li>
                            <li class="list-group-item">Logo sur invitations : <b>OUI</b></li>
                            <li class="list-group-item">Logo sur badges : <b>OUI</b></li>
                            <li class="list-group-item">Logo sur programme : <b>OUI</b></li>
                            <li class="list-group-item">Présence sur le site internet : <b>OUI</b></li>
                            <li class="list-group-item">Logo sur billboards : <b>OUI</b></li>
                            <li class="list-group-item">Logo sur banderoles : <b>OUI</b></li>
                            <li class="list-group-item">Logo sur élément de décorations : <b>OUI</b></li>
                            <li class="list-group-item">Invitations : <b>8</b></b></li>
                        </ul>
                        <a href="{{ route('home.sponsoring', 1) }}" class="mt-3 rounded-full w-100 btn btn-info rounded-pill">Selectionnez</a>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
