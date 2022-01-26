<?php

namespace App\Http\Controllers;

use App\Academie;
use App\Etablissement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class EtablissementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public  function add()
    {
        $academies = Academie::all();
        return view('etablissement.add',['academies'=>$academies]);
    }
    public  function getAll()
    {
        //Pour la pagination
        // $list_examens = Examen::paginate(3);
        $list_etablissements = Etablissement::all();
        return view('etablissement.list',['list_etablissements' => $list_etablissements]);
        return view('examen.list',['list_examens' => $list_examens]);

    }
    public  function edit($id)
    {
        $etablissement = etablissement::find($id);
        $academies = Academie::all();
        return view('etablissement.edit', ['etablissement'=>$etablissement, 'academies'=>$academies]);
    }
    public  function update(Request $request)
    {
        $etablissement = Etablissement::find($request->id);
        $etablissement->code = $request->code;
        $etablissement->nom = $request->nom;
        $etablissement->adresse = $request->adresse;
        $etablissement->ville = $request->ville;
        $etablissement->academies_id = $request->academie;
        //ajout a la base
        $result = $etablissement->save();// 1 ou 0*/
        return redirect('/etablissement/getAll');
    }
    public  function delete($id)
    {
        $etablissement = Etablissement::find($id);
        if($etablissement != null)
        {
            $etablissement->delete();
        }
        return redirect('/etablissement/getAll');
    }

    public function persist(Request $request)
    {
        //return $this->getAll();
        $etablissement = new Etablissement();
        $etablissement->code = $request->code;
        $etablissement->nom = $request->nom;
        $etablissement->adresse = $request->adresse;
        $etablissement->ville = $request->ville;
        $etablissement->academies_id = $request->academie;
        //ajout a la base
        $result = $etablissement->save();// 1 ou 0*/
        $academies = Academie::all();
        return view('etablissement.add', ['confirmation'=> $result, 'academies'=>$academies]);
    }
}
