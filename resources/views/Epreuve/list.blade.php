@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="form-group">
            <a href="{{route('addepreuve')}}">
                <input class="btn btn-primary" name="addepreuve" id="addepreuve" value="ajout Epreuve">
            </a>
        </div>
        <div class="row justify-content-center">
            <br><br><br>
            <div class="">
                <div class="card">

                    <div class="card-header">Liste des Epreuves</div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Identifiant</th>
                                <th>Nom Epreuve</th>
                                <th>Heure Debut</th>
                                <th>Heure Fin</th>
                                <th>Examens</th>
                                <th>Commissions</th>
                                <th colspan="2">Actions</th>
                            </tr>
                            @foreach($list_epreuves as $epreuve)
                                <tr>
                                    <td>{{ $epreuve->id }}</td>
                                    <td>{{ $epreuve->nomEpreuve }}</td>
                                    <td>{{ $epreuve->heureDebut }}</td>
                                    <td>{{ $epreuve->heureFin }}</td>
                                    <td>{{ $epreuve->examens_id }}</td>
                                    <td>{{ $epreuve->commissions_id }}</td>
                                    <td>
                                        <a href="{{route('editepreuve', ['id'=>$epreuve->id])}}" class="btn btn-success">Editer</a>
                                        <a href="{{route('deleteepreuve', ['id'=>$epreuve->id])}}" class="btn btn-danger" onclick="return confirm('Voulez-vous supprimer ?')">Supprimer</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
