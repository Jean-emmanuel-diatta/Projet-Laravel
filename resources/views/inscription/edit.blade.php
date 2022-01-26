@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="form-group">
                <a href="{{route('getallinscription')}}">
                    <input class="btn btn-primary" name="getallinscription" id="getallinscription" value="Liste des Inscription">
                </a>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Modification IA</div>
                    <div class="card-body">
                                    <form method="POST" action="{{route('updateinscription')}}">
                                        @csrf
                                        @if (isset($confirmation))
                                            @if($confirmation == 1)
                                                <div class="alert alert-success">Inscription modifiée</div>
                                            @else
                                                <div class="alert alert-danger">Inscription non modifiée</div>
                                            @endif
                                        @endif
                                        <div class="form-group">
                                            <label class="form-label"for="id">Identifiant a l'inscription</label>
                                            <input class="form-control" readonly="true" type="id" name="id" id="id" value="{{$inscription->id}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label"for="numInscription">Numero de l'inscription</label>
                                            <input class="form-control" type="text" name="numInscription" id="numInscription" value="{{$inscription->numInscription}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label"for="dateDebut">Date Debut a l'inscription</label>
                                            <input class="form-control" type="date" name="dateDebut" id="dateDebut" value="{{$inscription->dateDebut}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label"for="dateFin">Date Fin a l'inscription</label>
                                            <input class="form-control" type="date" name="dateFin" id="dateFin" value="{{$inscription->dateFin}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label"for="examens">Choisissez l'EXAMEN</label>
                                            <select class="form-control" name="examens" id="examens">
                                                <option value="0"  class="form-control"> -- Faites votre choix --</option>
                                                @foreach($examens as $examen)
                                                    <option value="{{$examen->id}}"  class="form-control">{{$examen->nomExamen}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label"for="eleves">Choisissez l'ELEVE</label>
                                            <select class="form-control" name="eleves" id="eleves">
                                                <option value="0"  class="form-control"> -- Faites votre choix --</option>
                                                @foreach($eleves as $eleve)
                                                    <option value="{{$eleve->id}}"  class="form-control">{{$eleve->prenom}} &nbsp;&nbsp;{{$eleve->nom}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label"for="user">User</label>
                                            <input class="form-control" type="text" readonly="true" name="user" id="user" value="{{ Auth::user()->name}}">
                                        </div>
                                        <div class="form-group">
                                            <input class="btn btn-success" type="submit"name="editer" id="editer" value="Editer">
                                            <a  href="{{route('getallinscription')}}">
                                                <input class="btn btn-danger" type="reset" name="annuler" id="annuler" value="Annuler">
                                            </a>
                                        </div>
                                </form>
                         </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
