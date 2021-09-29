@extends('layouts.default')

@section('content')

<div class="container mt-5">
    {!! Form::open() !!}
    <div class="p-5 row">
        <center><h5 class="fw-bold">Enregistrez-vous !</h5></center>

        <div class="mt-5 row">
            <div class="mb-3 form-group col-lg-4">
                <b>{!! Form::label('Nom de l\'entreprise') !!}</b>
                {!! Form::text('name', null, ['class'=> 'form-control']) !!}
            </div>

            <div class="mb-3 form-group col-lg-4">
                <b>{!! Form::label('Secteur d\'activité') !!}</b>
                {!! Form::text('project', null, ['class'=> 'form-control']) !!}
            </div>

            <div class="mb-3 form-group col-lg-4">
                <b>{!! Form::label('Personne en charge du dossier') !!}</b>
                {!! Form::text('project', null, ['class'=> 'form-control']) !!}
            </div>

            <div class="mb-3 form-group col-lg-4">
                <b>{!! Form::label('Fonction au seins de l\'entreprise ') !!}</b>
                {!! Form::text('project', null, ['class'=> 'form-control']) !!}
            </div>

            <div class="mb-3 form-group col-lg-4">
                <b>{!! Form::label('Adresse email') !!}</b>
                {!! Form::text('project', null, ['class'=> 'form-control']) !!}
            </div>

            <div class="mb-3 form-group col-lg-4">
                <b>{!! Form::label('Numéro de télèphone') !!}</b>
                {!! Form::text('project', null, ['class'=> 'form-control']) !!}
            </div>

            <div class="mb-3 form-group col-lg-4">
                <b>{!! Form::label('Adresse de l\'entreprise') !!}</b>
                {!! Form::text('project', null, ['class'=> 'form-control']) !!}
            </div>

            <div class="mb-3 form-group col-lg-4">
                <b>{!! Form::label('Site internet') !!}</b>
                {!! Form::text('project', null, ['class'=> 'form-control']) !!}
            </div>

            <div class="mb-3 form-group col-lg-4">
                <b>{!! Form::label('Pages ') !!}</b>
                {!! Form::text('project', null, ['class'=> 'form-control']) !!}
            </div>
        </div>

        <div class="mt-4 row">
            {!! Form::submit('Envoyez votre demande', ['class'=>'btn btn-danger col-lg-4 col-md-4']) !!}
        </div>

    </div>
    {!! Form::close() !!}
</div>

@endsection
