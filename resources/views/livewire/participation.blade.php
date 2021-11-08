<div>

    {!! Form::open(['route' => 'home.participation.save']) !!}
    <div class="p-5 row">
        <div class="mt-2 row">
            <div class="mb-3 form-group col-lg-4 offset-4">
                <center><h5 class="fw-bold">Confirmation</h5></center>
                <center><b>{!! Form::label('Entre votre numéro de téléphone') !!}</b></center> <br>
                @if (session()->has('error'))
                    <div class="w-100 alert alert-danger">
                        {{ session('error') }} <a href="{{ route('home.register') }}">S'inscrire</a>
                    </div>
                @endif

                @if (session()->has('success'))
                    <div class="w-100 alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                {{-- <span>Veuillez inserez le numero de telepphone enregistre lors de votre inscription</span> --}}
                {!! Form::text('phone', null, ['class'=> 'form-control']) !!} <br>

            {!! Form::submit('Valider', ['class'=>'btn btn-danger col-lg-4 col-md-4']) !!}
            </div>
        </div>

    </div>
    {!! Form::close() !!}

</div>
