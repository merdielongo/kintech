<nav class="shadow-sm navbar navbar-expand-lg navbar-dark fixed-top"  style="background: #A3386D">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home.index') }}">
            <img src="{{  asset('img/thumb/logo_kintech_2.PNG') }}" width="100">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="mb-2 navbar-nav ms-auto mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('home.index') }}">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href="{{ route('home.event') }}">Évènement</a></li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href="{{ route('home.program') }}">Programmes</a></li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href="{{ route('home.exposition') }}">Exposants</a></li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href="{{ route('home.sponsor') }}">Sponsors</a></li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href="{{ route('home.concours') }}">Concours</a></li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href="{{ route('home.contact') }}">Contact</a></li>
                <li class=""><a class="p-2 shadow-sm ms-5 btn btn-primary rounded-pill" aria-current="page" href="{{ route('home.register') }}">Participez !</a></li>
            </ul>
        </div>
    </div>
</nav>
<br><br><br>
