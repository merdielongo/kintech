@extends('layouts.default')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="p-10 mb-4 shadow-sm card">
                <div>
                    <h3>Comment ça marche !</h3> <br>
                    <span class="fw-bold">Profil de candidature ?</span>
                    <p class="mt-3">Tout porteur d’un projet fiable, innovant , inventeurs, start
                    ups souhaitant promouvoir leur
                    projet. Le candidat devra proposer un produit ou service numérique.</p>
                </div>

                <div>
                    <span class="fw-bold">Thématiques ?</span>
                    <ul class="mt-3 list-group list-group-flush">
                        <li class="list-group-item"><b>1</b> Accès à l’éducation/enseignement.</li>
                        <li class="list-group-item"><b>2</b> Accès aux soins médicaux.</li>
                        <li class="list-group-item"><b>3</b> Accès à l’emploi.</li>
                        <li class="list-group-item"><b>4</b> Digitalisation des services publiques.</li>
                        <li class="list-group-item"><b>5</b> Développement du secteur agricole.</li>
                        <li class="list-group-item"><b>6</b> L’Environnement urbain et rurale.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6">
            <div class="p-10 mb-4 shadow-sm card">
                <div>
                    <span class="fw-bold">Débouchés du concours ?</span>
                    <p class="mt-3">
                    Les 3 meilleurs projets recevront de la part de la ville de Kinshasa un soutien comme
                    partenaire officiel de la ville dans le secteur du numérique d’une durée de 1an.</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>1</b> Réception des subventions pendant 12 mois pour le développement du projet.</li>
                        <li class="list-group-item"><b>2</b> Développement du projet dans le ville de Kinshasa.</li>
                        <li class="list-group-item"><b>3</b> Promotion du projet par la ville de Kinshasa..</li>
                    </ul>
                </div>

                <div class="mt-4">
                    <span class="fw-bold">Eligibilité du dossier de candidature ?</span>
                    <ul class="mt-3 list-group list-group-flush">
                        <li class="list-group-item"><b>1</b> Avoir les preuves d’une existance légale.</li>
                        <li class="list-group-item"><b>2</b> Avoir au moins 1 an d’ existance.</li>
                        <li class="list-group-item"><b>3</b> Avoir une Projet liée à la technologie et au numérique pour la ville de Kinshasa.</li>
                        <li class="list-group-item"><b>4</b> Avoir un plan financier du projet.</li>
                        <li class="list-group-item"><b>5</b> Avoir un document listant tous les actionnaires
                        physiques ou morales détenant directement ou indirectement des parts ou actions.</li>

                        <li class="list-group-item"><b>6</b> Etre domicilié en République Démocratique du Congo.</li>
                        <li class="list-group-item"><b>7</b> Soumettre une photocopie d’une pièce d’identité.</li>
                        <li class="list-group-item"><b>8</b> Soumettre une présentation complète du projet en PDF.</li>
                        <li class="list-group-item"><b>9</b> Avoir un projet lié aux thématiques reprises ci-dessus.</li>
                    </ul>

                    <a href="{{ route('home.project') }}" class="mt-4 btn btn-danger">Accedez au formulaire</a>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
