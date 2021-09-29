@extends('layouts.default')

@section('content')

<div class="container mt-5">
    {!! Form::open() !!}
    <div class="p-5 shadow-sm row card">

        <div class="mt-5 row">

            <div class="col-lg-6 col-md-6">
                <img src="{{ asset('img/thumb/WhatsApp Image 2021-08-29 at 15.04.00.jpeg') }}" alt="" class="w-100">
            </div>
            <div class="col-lg-6 col-md-6">
                    <h5 class="mb-4 text-md">Contactez nous pour plus d'infos</h5>
                    <div class="mb-3 form-group">
                        <b>{!! Form::label('Nom ') !!}</b>
                        {!! Form::text('name', null, ['class'=> 'form-control']) !!}
                    </div>

                    <div class="mb-3 form-group">
                        <b>{!! Form::label('Adresse email') !!}</b>
                        {!! Form::text('project', null, ['class'=> 'form-control']) !!}
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
    {!! Form::close() !!}
</div>

@endsection
