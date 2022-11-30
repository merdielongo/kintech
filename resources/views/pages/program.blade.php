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
            <div class="col-lg-6 col-md-6">
                <div class="p-4 shadow-sm card">
                    <div class="mb-4 text-center fw-bold">
                        Jour 1 : Cérémonie d’ouverture, conférences présentation et concours.
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Heure</th>
                                <th scope="col">Activités</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>08h30 - 09h00</td>
                                <td>Arrivée et installation des invités</td>
                            </tr>
                            <tr>
                                <td>09h00 - 09h05</td>
                                <td>Hymne nationnale</td>
                            </tr>
                            <tr>
                                <td>09h05 - 09h15</td>
                                <td>Mot d'ouverture</td>
                            </tr>
                            <tr>
                                <td>09h15 - 10h00</td>
                                <td>Discours et divers</td>
                            </tr>
                            <tr>
                                <td>10h - 11h00</td>
                                <td>Cocktail d'ouverture + visite officielle de stands</td>
                            </tr>
                            <tr>
                                <td>11h00 - 11h15</td>
                                <td>installations des invités dans la salle de conférences</td>
                            </tr>
                            <tr>
                                <td>11h15 - 11h25</td>
                                <td>Mot d'introduction</td>
                            </tr>
                            <tr>
                                <td>11h25 - 12h25</td>
                                <td>Conférence 1</td>
                            </tr>
                            <tr>
                                <td>1éh25 - 13h25</td>
                                <td>Conférence 2</td>
                            </tr>
                            <tr>
                                <td>13h25 - 14h15</td>
                                <td>Pause</td>
                            </tr>
                            <tr>
                                <td>14h15 - 17h00</td>
                                <td>Présentation de projet et concours simultané</td>
                            </tr>
                            <tr>
                                <td>17h00</td>
                                <td>cloture de la prémière journée</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">

            <div class="p-4 shadow-sm card">
                <div class="mb-4 text-center fw-bold">
                    Jour 2 : Conférences, présentations, concours et clôture
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Heure</th>
                            <th scope="col">Activités</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>08h30 - 09h00</td>
                            <td>Arrivée et installation des invités</td>
                        </tr>
                        <tr>
                            <td>09h00 - 09h05</td>
                            <td>Mot d'ouverture</td>
                        </tr>
                        <tr>
                            <td>09h05 - 10h05</td>
                            <td>Conférence 3</td>
                        </tr>
                        <tr>
                            <td>10h05 - 11h05</td>
                            <td>Conférence 4</td>
                        </tr>
                        <tr>
                            <td>11h05 - 11h35</td>
                            <td>Pause</td>
                        </tr>
                        <tr>
                            <td>11h35 - 13h25</td>
                            <td>Présentation de projet et concours simultané</td>
                        </tr>
                        <tr>
                            <td>13h35 - 14h15</td>
                            <td>Pause et delibération</td>
                        </tr>
                        <tr>
                            <td>14h15 - 15h00</td>
                            <td>Cérémonie de cloture</td>
                        </tr>
                        <tr>
                            <td>15h00 - 15h40</td>
                            <td>Cocktail de cloture</td>
                        </tr>
                        <tr>
                            <td>15h40</td>
                            <td>Fin de l'évenement</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>

    </div>
</div>

@endsection
