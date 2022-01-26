@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="form-group">
                <a href="{{route('getallepreuve')}}">
                    <input class="btn btn-primary" name="getallepreuve" id="getallepreuve" value="Liste des Epreuves">
                </a>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ajout Epreuves</div>
                    <div class="card-body">
                        @if (isset($confirmation))
                            @if($confirmation == 1)
                                <div class="alert alert-success">Epreuve modifiée</div>
                            @else
                                <div class="alert alert-danger">Epreuve non modifiée</div>
                            @endif
                        @endif
                        <form method="POST" action="/epreuve/update">
                            @csrf
                            <div class="form-group">
                                <label class="form-label"for="id">Identifiant Epreuve</label>
                                <input class="form-control" type="text" name="id" id="id" value="{{$epreuve->id}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label"for="nomEpreuve">Nom Epreuve</label>
                                <input class="form-control" type="text" name="nomEpreuve" id="nomEpreuve" value="{{$epreuve->nomEpreuve}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="heureDebut">Debut de l'Epreuve</label>
                                <input class="form-control" type="time" name="heureDebut" id="heureDebut" value="{{$epreuve->heureDebut}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="heureFin"> Fin de l'Epreuve</label>
                                <input class="form-control" type="time" name="heureFin" id="heureFin" value="{{$epreuve->heureFin}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="examen">Choisissez l'EXAMEN</label>
                                <select class="form-control" name="examen" id="examen">
                                    <option value="0"  class="form-control"> -- Faites votre choix --</option>
                                    @foreach($examens as $examen)
                                        <option value="{{$examen->id}}"  class="form-control">{{$examen->nomExamen}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="commission">Choisissez la Commission</label>
                                <select class="form-control" name="commission" id="commission">
                                    <option value="0"  class="form-control"> -- Faites votre choix --</option>
                                    @foreach($commissions as $commission)
                                        <option value="{{$commission->id}}"  class="form-control">{{$commission->libelle}}</option>
                                    @endforeach
                                </select>
                                <div class="form-group">
                                    <input class="btn btn-success" type="submit" name="editer" id="editer" value="Editer">
                                    <a  href="{{route('getallepreuve')}}">
                                        <input class="btn btn-danger" name="annuler" id="annuler" value="Annuler">
                                    </a>
                            </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
