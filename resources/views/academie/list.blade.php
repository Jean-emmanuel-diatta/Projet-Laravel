@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="form-group">
            <a href="{{route('addacademie')}}">
                <input class="btn btn-primary" name="addacademie" id="addacademie" value="ajout Academie">
            </a>
        </div>
        <div class="row justify-content-center">
            <br><br><br>
            <div class="">
                <div class="card">

                    <div class="card-header">Ajout IA</div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Identifiant</th>
                                <th>Nom Academie</th>
                                <th>Adresse Academie</th>
                                <th colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Actions</th>
                            </tr>
                                @foreach($list_academies as $academie)
                                <tr>
                                    <td>{{ $academie->id }}</td>
                                    <td>{{ $academie->nomAcademie }}</td>
                                    <td>{{ $academie->adresseAcademie }}</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="{{route('editacademie', ['id'=>$academie->id])}}" class="btn btn-success">&nbsp;&nbsp;&nbsp;Editer&nbsp;&nbsp;&nbsp;</a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{route('deleteacademie', ['id'=>$academie->id])}}" class="btn btn-danger" onclick="return confirm('Voulez-vous supprimer ?')">Supprimer</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {{$list_academies->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
