@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="form-group">
            <a href="{{route('addnotes')}}">
                <input class="btn btn-primary" name="addnotes" id="addnotes" value="ajout Notes">
            </a>
        </div>
        <div class="row justify-content-center">
            <br><br><br>
            <div class="">
                <div class="card">

                    <div class="card-header">Liste des Notes</div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Identifiant</th>
                                <th>ELeve</th>
                                <th>Epreuve</th>
                                <th>Note Obtenue</th>
                                <th>Appreciation</th>
                                <th colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Actions</th>
                            </tr>
                            @foreach($list_notes as $note)
                                <tr>
                                    <td>{{ $note->id }}</td>
                                    <td>{{ $note->eleve }}</td>
                                    <td>{{ $note->epreuve }}</td>
                                    <td>{{ $note->noteObtenue }}</td>
                                    <td>{{ $note->appreciation }}</td>
                                    <td>
                                        <a href="{{route('editnotes', ['id'=>$note->id])}}" class="btn btn-success">Editer</a>
                                    </td>
                                    <td>
                                        <a href="{{route('deletenotes', ['id'=>$note->id])}}" class="btn btn-danger" onclick="return confirm('Voulez-vous supprimer ?')">Supprimer</a>
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
