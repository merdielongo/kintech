
@extends('layouts.default')

@section('content')

<div class="container">
    <div class="mt-5 row">
        <div class="mt-5 col-lg-3 col-md-3 offset-lg-1 col-md-1">

            <div class="text-uppercase">
                <img src="{{ asset('img/art_numeric.PNG') }}" alt="" class="w-100">
            </div>

            <div class="mt-5 row">
                <a href="{{ route('home.register') }}" class="p-2 text-lg btn btn-warning">@lang('Inscrivez vous')</a>
            </div>
        </div>

        <div class="mt-5 col-lg-6 col-md-6 offset-lg-1 col-md-1">
            <div class="p-5 border-0 card">
                <span class="fw-normal fs-5">@lang('KINTECH, première foire du numérique organisée par la ville de Kinshasa')</span>
                <div class="mt-3 row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="mb-4 col-lg-12 col-md-12">
                                <div>@lang('La ville de') <b>@lang('Kinshasa')</b> @lang('regorge de cerveaux,
                                    inventeurs, entrepreneurs, innovateurs et geeks. ')<br> <br>

                                    <b>@lang('Education')</b> @lang('et enseignement, environnement, accès aux
                                    soins médicaux ou encore') <b>@lang('digitalisation')</b> @lang('des services publics.') <br><br>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                @lang('A L’ère du') <b>@lang('digital')</b>@lang(', il est désormais indispensable
                                d’investir plus d’efforts dans le') <b>@lang('développement')</b> @lang('du') <b>@lang('numérique')</b> @lang('au niveau régionale.') <br><br>

                                @lang('La') <b>@lang('ville')</b> @lang('de') <b>@lang('Kinshasa')</b> @lang('propose faire la promotion des solutions numériques
                                pour pallier aux problèmes rencontrés dans ces différents secteurs.')
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
            <span class="fw-normal fs-5">@lang('Visitez le salon et Rencontrez les décideurs du secteur numérique')</span>
            <div class="mt-3 row">
                <div class="col-lg-12">
                    <div class="flex-row p-3 mb-2 border-0 card d-flex">
                        <div class="text-success fas fa-th fa-2x pe-4"></div>
                        <div class="fw-bold">@lang('Entreprises privées')</div>
                    </div>

                    <div class="flex-row p-3 mb-2 border-0 card d-flex">
                        <div class="text-success fas fa-th fa-2x pe-4"></div>
                        <div class="fw-bold">@lang('Entreprises publique')</div>
                    </div>

                    <div class="flex-row p-3 mb-2 border-0 card d-flex">
                        <div class="text-success fas fa-th fa-2x pe-4"></div>
                        <div class="fw-bold">@lang('Investisseurs Et actionnaires')</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 d-flex align-items-center">
            <div class="">
                <span class="fw-bold fs-4">@lang('Avez-vous un projet lié au secteur numérique ?')</span> <br> <br>
                <span class=""><b>@lang('KINTECH')</b> @lang('est l’évènement à ne pas manquer.') <br> <br>
                @lang('Présentez vos idées devant un panel de décideurs en participant
                au concours KINTECH et tentez de remporter le soutien de la ville de Kinshasa')</span> <br><br>

                <a href="{{ route('home.register') }}" class="p-2 btn btn-danger" style="background: #ff3b71">@lang('Inscrivez-vous maintenant')</a> <br><br>
                <a href="{{ route('home.program') }}">@lang('Découvrez le programme des journées.')</a>
            </div>
        </div>

    </div>
</div>

@endsection
