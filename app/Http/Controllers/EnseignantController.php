<?php

namespace App\Http\Controllers;

use App\Commission;
use App\Enseignant;
use App\Etablissement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class EnseignantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public  function add()
    {
        $etablissements = Etablissement::all();
        $commissions = Commission::all();
        return view('enseignant.add',['etablissements'=>$etablissements,'commissions'=>$commissions]);
    }
    public  function getAll()
    {
        //Pour la pagination
        // $list_examens = Examen::paginate(3);
        $list_enseignants = Enseignant::all();
        return view('enseignant.list',['list_enseignants' => $list_enseignants]);
    }
    public  function edit($id)
    {
        $enseignant = Enseignant::find($id);
        $etablissements = Etablissement::all();
        $commissions = Commission::all();
        return view('enseignant.edit', ['enseignant'=>$enseignant, 'etablissements'=>$etablissements,'commissions'=>$commissions]);
    }
    public  function update(Request $request)
    {
        $enseignant = Enseignant::find($request->id);
        $enseignant->matricule = $request->matricule;
        $enseignant->nom = $request->nom;
        $enseignant->prenom = $request->prenom;
        $enseignant->telephone = $request->telephone;
        $enseignant->adresse = $request->adresse;
        $enseignant->ville = $request->ville;
        $enseignant->commissions_id = $request->commission;
        $enseignant->etablissements_id = $request->etablissement;
        //ajout a la base
        $result = $enseignant->save();// 1 ou 0*/
        return redirect('/enseignant/getAll');
    }
    public  function delete($id)
    {
        $enseignant = Enseignant::find($id);
        if($enseignant != null)
        {
            $enseignant->delete();
        }
        return redirect('/enseignant/getAll');
    }

    public function persist(Request $request)
    {
        //return $this->getAll();
        $enseignant = new Enseignant();
        $enseignant->matricule = $request->matricule;
        $enseignant->nom = $request->nom;
        $enseignant->prenom = $request->prenom;
        $enseignant->telephone = $request->telephone;
        $enseignant->adresse = $request->adresse;
        $enseignant->ville = $request->ville;
        $enseignant->commissions_id = $request->commission;
        $enseignant->etablissements_id = $request->etablissement;
        // $centre->academies_id = $request->academie;
        //ajout a la base
        $result = $enseignant->save();// 1 ou 0*/
        $commissions = Commission::all();
        $etablissements = Etablissement::all();
        return view('enseignant.add', ['confirmation'=> $result, 'commissions'=>$commissions,'etablissements'=>$etablissements]);
    }
}
