
@extends('layouts.default')

@section('content')

<div class="container">
    <div class="mt-5 row">
        <div class="mt-5 col-lg-3 col-md-3 offset-lg-1 col-md-1">

            <div class="text-uppercase fs-2">
                <img src="{{ asset('img/thumb/4.jpg') }}" alt="" class="w-100">
            </div>

            <div class="mt-5 row">
                <a href="{{ route('home.register') }}" class="p-2 text-lg rounded-pill btn btn-primary">Inscrivez vous</a>
            </div>
        </div>

        <div class="mt-5 col-lg-6 col-md-6">
            <div class="p-5 border-0 card">
                <span class="fw-normal fs-5">KINTECH, première foire du numérique organisée par la ville de Kinshasa</span>
                <div class="mt-3 row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="mb-4 col-lg-12 col-md-12">
                                <div>La ville de <b>Kinshasa</b> regorge de cerveaux,
                                    inventeurs, entrepreneurs, innovateurs et geeks. <br> <br>

                                    <b>Education</b> et enseignement, environnement, accès aux
                                    soins médicaux ou encore <b>digitalisation</b> des services publics. <br><br>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">

                                A L’ère du <b>digital</b>, il est désormais indispensable
                                d’investir plus d’efforts dans le <b>développement</b> du <b>numérique</b> au niveau régionale. <br><br>

                                La <b>ville</b> de <b>Kinshasa</b> propose faire la promotion des solutions numériques
                                pour pallier aux problèmes rencontrés dans ces différents secteurs.

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mt-5 mb-4">
    <div class="mt-5 row">
        <div class="mt-5 col-lg-6 col-md-6">
            <span class="fw-normal fs-5">Visitez le salon et Rencontrez les décideurs du secteur numérique</span>
            <div class="mt-3 row">
                <div class="col-lg-12">
                    <div class="flex-row p-3 mb-2 border-0 card d-flex">
                        <div class="text-success fas fa-th fa-2x pe-4"></div>
                        <div class="fw-bold">Entreprises privées</div>
                    </div>

                    <div class="flex-row p-3 mb-2 border-0 card d-flex">
                        <div class="text-success fas fa-th fa-2x pe-4"></div>
                        <div class="fw-bold">Entreprises publiques.</div>
                    </div>

                    <div class="flex-row p-3 mb-2 border-0 card d-flex">
                        <div class="text-success fas fa-th fa-2x pe-4"></div>
                        <div class="fw-bold">Investisseurs Et actionnaires</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 d-flex align-items-center">
            <div class="">
                <span class="fw-bold fs-4">Avez-vous un projet lié au secteur numérique ?</span> <br> <br>
                <span class=""><b>KINTECH</b> est l’évènement à ne pas manquer. <br> <br>
                Présentez vos idées devant un panel de décideurs en participant
                au concours KINTECH et tentez de remporter le soutien de la ville de Kinshasa</span> <br><br>

                <a href="{{ route('home.register') }}" class="p-2 btn btn-danger">Inscrivez-vous maintenant</a> <br><br>
                <a href="{{ route('home.program') }}">Découvrez le programme des journées.</a>
            </div>
        </div>

    </div>
</div>

@endsection
