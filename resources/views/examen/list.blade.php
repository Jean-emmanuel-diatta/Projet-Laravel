@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="form-group">
            <a href="{{route('addexamen')}}">
                <input class="btn btn-primary" name="addexamen" id="addexamen" value="ajout Examen">
            </a>
        </div>
        <div class="row justify-content-center">
            <br><br><br>
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">Liste des Examens</div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Identifiant</th>
                                <th>Nom Examen</th>
                                <th>Date Debut Examen</th>
                                <th>Date Fin Examen</th>
                                <th>Academie</th>
                                <th>Actions</th>
                                <th>Actions</th>
                            </tr>
                            @foreach($list_examens as $examen)
                                <tr>
                                    <td>{{ $examen->id }}</td>
                                    <td>{{ $examen->nomExamen }}</td>
                                    <td>{{ $examen->dateDebut }}</td>
                                    <td>{{ $examen->dateFin }}</td>
                                    <td>{{ $examen->academies_id }}</td>
                                    <td>
                                        <a href="{{route('editexamen', ['id'=>$examen->id])}}" class="btn btn-success">Editer</a>
                                    </td>
                                    <td>
                                        <a href="{{route('deleteexamen', ['id'=>$examen->id])}}" class="btn btn-danger" onclick="return confirm('Voulez-vous supprimer ?')">Supprimer</a>
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
