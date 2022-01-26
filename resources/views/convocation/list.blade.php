@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="form-group">
            <a href="{{route('addconvocation')}}">
                <input class="btn btn-primary" name="addconvocation" id="addconvocation" value="ajout Convocation">
            </a>
        </div>
        <div class="row justify-content-center">
            <br><br><br>
            <div class="">
                <div class="card">

                    <div class="card-header">Liste des Convocations</div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Identifiant</th>
                                <th> Libelle </th>
                                <th>Date  </th>
                                <th>Enseignants</th>
                                <th colspan="2">Actions</th>
                            </tr>
                            @foreach($list_convocations as $convocation)
                                <tr>
                                    <td>{{ $convocation->id }}</td>
                                    <td>{{ $convocation->libelle }}</td>
                                    <td>{{ $convocation->date }}</td>
                                    <td>{{ $convocation->enseignants_id }}</td>
                                    <td>
                                        <a href="{{route('editconvocation', ['id'=>$convocation->id])}}" class="btn btn-success">Editer</a>
                                        <a href="{{route('deleteconvocation', ['id'=>$convocation->id])}}" class="btn btn-danger" onclick="return confirm('Voulez-vous supprimer ?')">Supprimer</a>
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
