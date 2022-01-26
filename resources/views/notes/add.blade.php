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
                    <div class="card-header">Ajout Inscription</div>
                    <div class="card-body">
                        @if (isset($confirmation))
                            @if($confirmation == 1)
                                <div class="alert alert-success">Note ajoutée</div>
                            @else
                                <div class="alert alert-danger">Note non ajoutée</div>
                            @endif
                        @endif
                        <form method="POST" action="/notes/persist">
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
                                <input class="form-control" max="20" min="0" type="number" name="noteObtenue" id="noteObtenue">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="appreciation">Appreciation</label>
                                <input class="form-control" type="text" name="appreciation" id="appreciation">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-success" type="submit" name="envoyer" id="envoyer" value="Envoyer">
                                <input class="btn btn-danger" type="reset" name="annuler" id="annuler" value="Annuler">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
