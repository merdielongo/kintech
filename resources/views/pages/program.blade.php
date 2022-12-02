@extends('layouts.default')

@section('content')

<div class="pt-5 pb-5 mt-2">
    <div class="container">
        <div class="row">
            <center>
                <span>EDITION 2022</span> <br>
                <span class="text-3xl font-bold">Programme des activités</span>
            </center>
        </div><br> <br>

        <div class="row">
            <div class="col-lg-6">
                <img src="{{ asset('img/pr_1.svg') }}">
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('img/pr_2.svg') }}">
            </div>
        </div>

    </div>
</div>

@endsection
