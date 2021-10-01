<div>

    {!! Form::open(['wire:submit.prevent' => 'save']) !!}
    <div class="p-5 shadow-sm row card">
        <center><h5 class="fw-bold">Formulaire d'enregistrement du projet</h5></center>
        @if (session()->has('message'))
            <div class="w-100 alert alert-success">
                {{ session('message') }}
            </div>
        @endif


        @if (session()->has('error'))
            <div class="w-100 alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="mt-5 row">
            <div class="mb-3 form-group col-lg-4">
                <b>{!! Form::label('Nom de l\'entreprise *') !!}</b> <br>
                @error('team_name') <span class="text-sm text-danger">{{ $message }}</span> @enderror
                {!! Form::text('name', null, ['class'=> 'form-control', 'wire:model' => 'team_name']) !!}
            </div>

            <div class="mb-3 form-group col-lg-4">
                <b>{!! Form::label('Nom projet *') !!}</b> <br>
                @error('name') <span class="text-sm text-danger">{{ $message }}</span> @enderror
                {!! Form::text('project', null, ['class'=> 'form-control', 'wire:model' => 'name']) !!}
            </div>

            <div class="mb-3 form-group col-lg-4">
                <b>{!! Form::label('Personne en charge du projet *') !!}</b> <br>
                @error('manager') <span class="text-sm text-danger">{{ $message }}</span> @enderror
                {!! Form::text('project', null, ['class'=> 'form-control', 'wire:model' => 'manager']) !!}
            </div>

            <div class="mb-3 form-group col-lg-4">
                <b>{!! Form::label('Secteur d\'activité *') !!}</b> <br>
                @error('activity') <span class="text-sm text-danger">{{ $message }}</span> @enderror
                {!! Form::text('project', null, ['class'=> 'form-control', 'wire:model' => 'activity']) !!}
            </div>

            <div class="mb-3 form-group col-lg-4">
                <b>{!! Form::label('Adresse email *') !!}</b> <br>
                @error('email') <span class="text-sm text-danger">{{ $message }}</span> @enderror
                {!! Form::text('project', null, ['class'=> 'form-control', 'wire:model' => 'email']) !!}
            </div>

            <div class="mb-3 form-group col-lg-4">
                <b>{!! Form::label('Numéro de télèphone *') !!}</b> <br>
                @error('phone') <span class="text-sm text-danger">{{ $message }}</span> @enderror
                {!! Form::text('project', null, ['class'=> 'form-control', 'wire:model' => 'phone']) !!}
            </div>

            <div class="mb-3 form-group col-lg-4">
                <b>{!! Form::label('Adresse de l\'entreprise') !!}</b>
                {!! Form::text('project', null, ['class'=> 'form-control', 'wire:model' => 'address']) !!}
            </div>

            <div class="mb-3 form-group col-lg-4">
                <b>{!! Form::label('Site internet') !!}</b>
                {!! Form::text('project', null, ['class'=> 'form-control', 'wire:model' => 'website']) !!}
            </div>

            <div class="mb-3 form-group col-lg-4">
                <b>{!! Form::label('Pages ') !!}</b>
                {!! Form::text('project', null, ['class'=> 'form-control', 'wire:model' => 'page']) !!}
            </div>

            <div class="mb-3 form-group col-lg-4">
                <b>{!! Form::label('Photocopie de la pièce d’identité. *') !!}</b> <br>
                @error('identity') <span class="text-sm text-danger">{{ $message }}</span> @enderror
                {!! Form::file('project', ['class'=> 'form-control', 'wire:model' => 'identity']) !!}
            </div>

            <div class="mb-3 form-group col-lg-4">
                <b>{!! Form::label('Présentation complète du projet en PDF. *') !!}</b> <br>
                @error('project') <span class="text-sm text-danger">{{ $message }}</span> @enderror
                {!! Form::file('project', ['class'=> 'form-control', 'wire:model' => 'project']) !!}
            </div>
        </div>

        <div class="mt-4 row">
            {!! Form::submit('Envoyer le formulaire', ['class'=>'btn btn-danger col-lg-4 col-md-4']) !!}
        </div>
        @if (session()->has('message'))
            <div class="w-100 alert alert-success">
                {{ session('message') }}
            </div>
        @endif


        @if (session()->has('error'))
            <div class="w-100 alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    </div>
    {!! Form::close() !!}

</div>
