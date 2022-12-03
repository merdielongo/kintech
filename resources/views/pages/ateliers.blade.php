@extends('layouts.default')

@section('content')

    <div class="container mt-5 mb-3">

        <div class="row p-4">

            <div class="col-12 p-5">
                <center>
                    <h4 class="text-upper">PARTICIPEZ AUX ATELIERS ARTS NUMÉRIQUES</h4>
                </center>
            </div>

            <div class="col-lg-4 col-md-4">
                <img src="{{ asset('img/at_1.JPG') }}">
            </div>
            <div class="col-lg-4 col-md-4">
                <img src="{{ asset('img/at_2.JPG') }}">
            </div>
            <div class="col-lg-4 col-md-4">
                <img src="{{ asset('img/at_3.JPG') }}">
            </div>
        </div>

    </div>

@endsection
