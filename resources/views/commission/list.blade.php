@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="form-group">
            <a href="{{route('addcommission')}}">
                <input class="btn btn-primary" name="addcommission" id="addcommission" value="ajout Commission">
            </a>
        </div>
        <div class="row justify-content-center">
            <br><br><br>
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">Liste des Commissions</div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Identifiant</th>
                                <th>Date de Rencontre</th>
                                <th>Libelle</th>
                                <th>Academie</th>
                                <th>Actions</th>
                                <th>Actions</th>
                            </tr>
                            @foreach($list_commissions as $commission)
                                <tr>
                                    <td>{{ $commission->id }}</td>
                                    <td>{{ $commission->dateDeRencontre }}</td>
                                    <td>{{ $commission->libelle }}</td>
                                    <td>{{ $commission->academies_id }}</td>
                                    <td>
                                        <a href="{{route('editcommission', ['id'=>$commission->id])}}" class="btn btn-success">Editer</a>
                                    </td>
                                    <td>
                                        <a href="{{route('deletecommission', ['id'=>$commission->id])}}" class="btn btn-danger" onclick="return confirm('Voulez-vous supprimer ?')">Supprimer</a>
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
