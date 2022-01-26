@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="form-group">
            <a href="{{route('addenseignant')}}">
                <input class="btn btn-primary" name="addenseignant" id="addenseignant" value="ajout Enseignant">
            </a>
        </div>
        <div class="row justify-content-center">
            <br><br><br>
            <div class="">
                <div class="card">

                    <div class="card-header">Liste des Enseignants</div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Identifiant</th>
                                <th>matricule</th>
                                <th>nom </th>
                                <th> prenom </th>
                                <th>telephone  </th>
                                <th>adresse </th>
                                <th>ville </th>
                                <th>commissions </th>
                                <th>etablissements</th>
                                <th colspan="2">Actions</th>
                            </tr>
                            @foreach($list_enseignants as $enseignant)
                                <tr>
                                    <td>{{ $enseignant->id }}</td>
                                    <td>{{ $enseignant->matricule }}</td>
                                    <td>{{ $enseignant->nom }}</td>
                                    <td>{{ $enseignant->prenom }}</td>
                                    <td>{{ $enseignant->telephone }}</td>
                                    <td>{{ $enseignant->adresse }}</td>
                                    <td>{{ $enseignant->ville }}</td>
                                    <td>{{ $enseignant->commissions_id }}</td>
                                    <td>{{ $enseignant->etablissements_id}}</td>
                                    <td>
                                        <a href="{{route('editenseignant', ['id'=>$enseignant->id])}}" class="btn btn-success">Editer</a>

                                        <a href="{{route('deleteenseignant', ['id'=>$enseignant->id])}}" class="btn btn-danger" onclick="return confirm('Voulez-vous supprimer ?')">Supprimer</a>
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
