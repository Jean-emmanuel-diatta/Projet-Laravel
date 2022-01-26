@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="form-group">
            <a href="{{route('addetablissement')}}">
                <input class="btn btn-primary" name="addetablissement" id="addetablissement" value="ajout Etablissement">
            </a>
        </div>
        <div class="row justify-content-center">
            <br><br><br>
            <div class="">
                <div class="card">

                    <div class="card-header">Liste des Etablissement</div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Identifiant</th>
                                <th>code </th>
                                <th> Nom </th>
                                <th>Adresse  </th>
                                <th>ville </th>
                                <th>Academie</th>
                                <th>Actions</th>
                            </tr>
                            @foreach($list_etablissements as $etablissement)
                                <tr>
                                    <td>{{ $etablissement->id }}</td>
                                    <td>{{ $etablissement->code }}</td>
                                    <td>{{ $etablissement->nom }}</td>
                                    <td>{{ $etablissement->adresse }}</td>
                                    <td>{{ $etablissement->ville }}</td>
                                    <td>{{ $etablissement->academies_id }}</td>
                                    <td>
                                        <a href="{{route('editetablissement', ['id'=>$etablissement->id])}}" class="btn btn-success">Editer</a>
                                        <a href="{{route('deleteetablissement', ['id'=>$etablissement->id])}}" class="btn btn-danger" onclick="return confirm('Voulez-vous supprimer ?')">Supprimer</a>
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
