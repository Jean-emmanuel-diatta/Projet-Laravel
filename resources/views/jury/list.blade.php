@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="form-group">
            <a href="{{route('addjury')}}">
                <input class="btn btn-primary" name="addjury" id="addjury" value="ajout Jury">
            </a>
        </div>
        <div class="row justify-content-center">
            <br><br><br>
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">Liste des Juries</div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Identifiant</th>
                                <th> Numero </th>
                                <th>Chef de jury  </th>
                                <th>Centre</th>
                                <th>Actions</th>
                            </tr>
                            @foreach($list_juries as $jury)
                                <tr>
                                    <td>{{ $jury->id }}</td>
                                    <td>{{ $jury->numero }}</td>
                                    <td>{{ $jury->nomPresidentJury }}</td>
                                    <td>{{ $jury->centres_id }}</td>
                                    <td>
                                        <a href="{{route('editjury', ['id'=>$jury->id])}}" class="btn btn-success">Editer</a>
                                        <a href="{{route('deletejury', ['id'=>$jury->id])}}" class="btn btn-danger" onclick="return confirm('Voulez-vous supprimer ?')">Supprimer</a>
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
