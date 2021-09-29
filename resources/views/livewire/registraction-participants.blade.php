<div>
    {!! Form::open(['wire:submit.prevent' => 'submit']) !!}
    <div class="p-5 shadow-sm row card">
        <center><h5><b>Enregistrez-vous</b></h5> pour participer en tant que visiteur</center>

        <div class="mt-5 row">
            <div class="mb-3 form-group col-lg-4">
                <b>{!! Form::label('Nom') !!}</b> <br>
                @error('name') <span class="text-sm text-danger">{{ $message }}</span> @enderror
                {!! Form::text('name', null, ['class'=> 'form-control', 'wire:model' => 'name']) !!}
            </div>

            <div class="mb-3 form-group col-lg-4">
                <b>{!! Form::label('Post Nom') !!}</b>
                {!! Form::text('project', null, ['class'=> 'form-control', 'wire:model' => 'last_name']) !!}
            </div>

            <div class="mb-3 form-group col-lg-4">
                <b>{!! Form::label('Prénom') !!}</b>
                {!! Form::text('project', null, ['class'=> 'form-control', 'wire:model' => 'first_name']) !!}
            </div>

            <div class="mb-3 form-group col-lg-4">
                <b>{!! Form::label('Sexe') !!}</b>
                {!! Form::select('sex', ['h'=>'homme', 'f' =>'femme'], 'h', ['class'=> 'form-control', 'wire:model' => 'sex']) !!}
                {{-- {!! Form::text('project', null, ['class'=> 'form-control']) !!} --}}
            </div>

            <div class="mb-3 form-group col-lg-4">
                <b>{!! Form::label('Adresse email') !!}</b>
                {!! Form::text('project', null, ['class'=> 'form-control', 'wire:model' => 'mail']) !!}
            </div>

            <div class="mb-3 form-group col-lg-4">
                <b>{!! Form::label('Numéro de télèphone') !!}</b>
                {!! Form::text('project', null, ['class'=> 'form-control', 'wire:model' => 'phone']) !!}
            </div>
        </div>

        <div class="mt-4 row">
            {!! Form::submit('S\'inscrire', ['class'=>'btn btn-info col-lg-4 col-md-4']) !!}
        </div>

    </div>
    {!! Form::close() !!}
</div>
