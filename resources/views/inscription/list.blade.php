@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="form-group">
            <a href="{{route('addinscription')}}">
                <input class="btn btn-primary" name="addinscription" id="addinscription" value="ajout Inscription">
            </a>
        </div>
        <div class="row justify-content-center">
            <br><br><br>
            <div class="">
                <div class="card">

                    <div class="card-header">Liste des Inscrits</div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Identifiant</th>
                                <th>numero Inscription</th>
                                <th>Date Debut Inscription</th>
                                <th>Date Fin Inscription</th>
                                <th>Examen</th>
                                <th>eleves</th>
                                <th>user</th>
                                <th colspan="2">Actions</th>
                            </tr>
                            @foreach($list_inscriptions as $inscription)
                                <tr>
                                    <td>{{ $inscription->id }}</td>
                                    <td>{{ $inscription->numInscription }}</td>
                                    <td>{{ $inscription->dateDebut }}</td>
                                    <td>{{ $inscription->dateFin }}</td>
                                    <td>{{ $inscription->examens_id }}</td>
                                    <td>{{ $inscription->eleves_id }}</td>
                                    <td>{{ $inscription->users_id }}</td>
                                    <td>
                                        <a href="{{route('editinscription', ['id'=>$inscription->id])}}" class="btn btn-success">Editer</a>
                                        <a href="{{route('deleteinscription', ['id'=>$inscription->id])}}" class="btn btn-danger" onclick="return confirm('Voulez-vous supprimer ?')">Supprimer</a>
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
