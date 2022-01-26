@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="form-group">
            <a href="{{route('addcentre')}}">
                <input class="btn btn-primary" name="addcentre" id="addcentre" value="ajout Centre">
            </a>
        </div>
        <div class="row justify-content-center">
            <br><br><br>
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">Liste des Centres</div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Identifiant</th>
                                <th> Nom </th>
                                <th>Adresse  </th>
                                <th>Academie</th>
                                <th>Actions</th>
                            </tr>
                            @foreach($list_centres as $centre)
                                <tr>
                                    <td>{{ $centre->id }}</td>
                                    <td>{{ $centre->nom }}</td>
                                    <td>{{ $centre->adresse }}</td>
                                    <td>{{ $centre->academies_id }}</td>
                                    <td>
                                        <a href="{{route('editcentre', ['id'=>$centre->id])}}" class="btn btn-success">Editer</a>
                                        <a href="{{route('deletecentre', ['id'=>$centre->id])}}" class="btn btn-danger" onclick="return confirm('Voulez-vous supprimer ?')">Supprimer</a>
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
