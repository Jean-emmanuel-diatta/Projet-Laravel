@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="form-group">
                <a href="{{route('getallnotes')}}">
                    <input class="btn btn-primary" name="getallnotes" id="getallnotes" value="Liste des Notes">
                </a>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Modification Inscription</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="control-label"for="id">Identifiant de la note</label>
                            <input class="form-control" max="20" min="0" type="text" name="id" id="id" value="{{$note->id}}">
                        </div>
                        <form method="POST" action="{{route('updatenotes ')}}">
                            @csrf
                            <div class="form-group">
                                <label class="control-label"for="eleve">Choisissez l'ELeve</label>
                                <select class="form-control" name="eleve" id="eleve">
                                    <option value="0"  class="form-control"> -- Faites votre choix --</option>
                                    @foreach($eleves as $eleve)
                                        <option value="{{$eleve->id}}"  class="form-control">{{$eleve->prenom}}&ensp;&ensp;{{$eleve->nom}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="epreuve">Choisissez l'Epreuve</label>
                                <select class="form-control" name="epreuve" id="epreuve">
                                    <option value="0"  class="form-control"> -- Faites votre choix --</option>
                                    @foreach($epreuves as $epreuve)
                                        <option value="{{$epreuve->id}}"  class="form-control">&nbsp;&nbsp;{{$epreuve->nomEpreuve}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="noteObtenue">NOte Obtenue</label>
                                <input class="form-control" max="20" min="0" type="number" name="noteObtenue" id="noteObtenue" value="{{$note->noteObtenue}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="appreciation">Appreciation</label>
                                <input class="form-control" type="text" name="appreciation" id="appreciation" value="{{$note->appreciation}}">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-success" type="submit" name="editer" id="editer" value="Editer">
                                <a  href="{{route('getallnotes')}}">
                                    <input class="btn btn-danger" name="annuler" id="annuler" value="Annuler">
                                </a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
