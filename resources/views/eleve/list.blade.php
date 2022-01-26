@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="form-group">
            <a href="{{route('addeleve')}}">
                <input class="btn btn-primary" name="addeleve" id="addeleve" value="ajout Eleve">
            </a>
        </div>
        <div class="row justify-content-center">
            <br><br><br>
            <div class="">
                <div class="card">
                    <div class="card-header">Liste des Eleves</div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Identifiant</th>
                                <th>Matricule</th>
                                <th>Nom</th>
                                <th>Prenom </th>
                                <th>Email </th>
                                <th>Date de Naissance</th>
                                <th>Lieu de Naissance</th>
                                <th>Classe</th>
                                <th>Etablissement</th>
                                <th>Action</th>
                                <th>Action</th>
                            </tr>
                            @foreach($list_eleves as $eleve)
                                <tr>
                                    <td>{{ $eleve->id }}</td>
                                    <td>{{ $eleve->matricule }}</td>
                                    <td>{{ $eleve->nom }}</td>
                                    <td>{{ $eleve->prenom }}</td>
                                    <td>{{ $eleve->email }}</td>
                                    <td>{{ $eleve->dateNaissance }}</td>
                                    <td>{{ $eleve->lieuNaissance }}</td>
                                    <td>{{ $eleve->classe }}</td>
                                    <td>{{ $eleve->etablissements_id}}</td>
                                    <td>
                                        <a href="{{route('editeleve', ['id'=>$eleve->id])}}" class="btn btn-success">Editer</a>
                                    </td>
                                    <td>
                                        <a href="{{route('deleteeleve', ['id'=>$eleve->id])}}" class="btn btn-danger" onclick="return confirm('Voulez-vous supprimer ?')">Supprimer</a>
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
