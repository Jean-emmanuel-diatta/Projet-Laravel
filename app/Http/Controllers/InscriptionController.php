<?php

namespace App\Http\Controllers;

use App\Eleve;
use App\Examen;
use App\Inscription;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InscriptionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public  function add()
    {
        $eleves = Eleve::all();
        $examens = Examen::all();
       // $user =  User::all();
        return view('inscription.add',['eleves'=>$eleves,'examens'=>$examens/*,'user'=>$user*/]);
    }
    public  function getAll()
    {
        //Pour la pagination
        // $list_examens = Examen::paginate(3);
        $list_inscriptions = Inscription::all();
        return view('inscription.list',['list_inscriptions' => $list_inscriptions]);
    }
    public  function edit($id)
    {
        $inscription = Inscription::find($id);
        $examens = Examen::all();
        $eleves = Eleve::all();
        return view('inscription.edit', ['inscription'=>$inscription,'examens'=>$examens, 'eleves'=>$eleves]);
    }
    public  function update(Request $request)
    {
        $inscription = Inscription::find($request->id);
        $inscription->numInscription = $request->numInscription;
        $inscription->dateDebut = $request->dateDebut;
        $inscription->dateFin = $request->dateFin;
        $inscription->examens_id = $request->examens;
        $inscription->eleves_id = $request->eleves;
        $inscription->users_id = Auth::id();
        //ajout a la base
        $result = $inscription->save();// 1 ou 0*/
        return redirect('/inscription/getAll');
    }
    public  function delete($id)
    {
        $inscription = Inscription::find($id);
        if($inscription != null)
        {
            $inscription->delete();
        }
        return redirect('/inscription/getAll');
    }

    public function persist(Request $request)
    {
        //return $this->getAll();
        $inscription = new Inscription();
        $inscription->numInscription = $request->numInscription;
        $inscription->dateDebut = $request->dateDebut;
        $inscription->dateFin = $request->dateFin;
        $inscription->examens_id = $request->examen;
        $inscription->eleves_id = $request->eleve;
        $inscription->users_id = Auth::id();
        //ajout a la base
        $result = $inscription->save();// 1 ou 0*/
        $eleves = Eleve::all();
        $examens = Examen::all();
         $users =  User::all();
        return view('inscription.add', ['confirmation'=> $result,'examens'=>$examens,'eleves'=>$eleves,'users'=>$users]);
    }
}
