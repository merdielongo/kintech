@extends('layouts.default')

@section('content')

<div class="container mt-5">
    {!! Form::open() !!}
    <div class="p-3 row">

        <center>
            <h5 class="mb-4">CONTACTEZ NOUS POUR PLUS D'INFOS</h5>
        </center>

        <div class="mt-5 row card border-0">

            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
                    <div class="w-100 shadow-sm p-5" style="background: #A3386D">
                        <img src="{{ asset('img/thumb/logo_kintech_2.PNG') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="w-100 p-4">
                        <div class="mb-3 form-group">
                            {!! Form::text('name', null, ['class'=> 'form-control', 'placeholder' => 'Nom']) !!}
                        </div>

                        <div class="mb-3 form-group">
                            {!! Form::text('project', null, ['class'=> 'form-control', 'placeholder' => 'Adresse email']) !!}
                        </div>

                        <div class="mb-3 form-group">
                            <b>{!! Form::label('Message') !!}</b>
                            {{-- {!! Form::textarea($name, $value, [$options]) !!} --}}
                            {!! Form::textarea('project', null, ['class'=> 'form-control']) !!}
                        </div>
                        {!! Form::submit('Envoyer le formulaire', ['class'=>'btn btn-danger col-lg-4 col-md-4']) !!}
                    </div>
            </div>

        </div>
    </div>


    </div>
    {!! Form::close() !!}
</div>

@endsection
