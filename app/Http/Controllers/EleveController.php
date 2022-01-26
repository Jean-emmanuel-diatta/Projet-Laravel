<?php

namespace App\Http\Controllers;

use App\Eleve;
use App\Etablissement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public  function add()
    {
        $etablissements = Etablissement::all();
        return view('eleve.add',['etablissements'=>$etablissements]);
    }
    public  function getAll()
    {
        //Pour la pagination
        // $list_examens = Examen::paginate(3);
        $list_eleves = Eleve::all();
        return view('eleve.list',['list_eleves' => $list_eleves]);
    }
    public  function edit($id)
    {
        $eleve = Eleve::find($id);
        $etablissements = Etablissement::all();
        return view('eleve.edit', ['eleve'=>$eleve, 'etablissements'=>$etablissements]);
    }
    public  function update(Request $request)
    {
        $eleve = Eleve::find($request->id);
        $eleve->matricule = $request->matricule;
        $eleve->nom = $request->nom;
        $eleve->prenom = $request->prenom;
        $eleve->email = $request->email;
        $eleve->dateNaissance = $request->dateNaissance;
        $eleve->lieuNaissance = $request->lieuNaissance;
        $eleve->classe = $request->classe;
        $eleve->etablissements_id = $request->etablissement;
        //ajout a la base
        $result = $eleve->save();// 1 ou 0*/
        return redirect('/eleve/getAll');
    }
    public  function delete($id)
    {
        $eleve = Eleve::find($id);
        if($eleve != null)
        {
            $eleve->delete();
        }
        return redirect('/eleve/getAll');
    }

    public function persist(Request $request)
    {
        //return $this->getAll();
        $eleve = new Eleve();
        $eleve->matricule = $request->matricule;
        $eleve->nom = $request->nom;
        $eleve->prenom = $request->prenom;
        $eleve->email = $request->email;
        $eleve->dateNaissance = $request->dateNaissance;
        $eleve->lieuNaissance = $request->lieuNaissance;
        $eleve->classe = $request->classe;
        $eleve->etablissements_id = $request->etablissement;;
        //ajout a la base
        $result = $eleve->save();// 1 ou 0*/
        $etablissements = Etablissement::all();
        return view('eleve.add', ['confirmation'=> $result,'etablissements'=>$etablissements]);
    }
}
