<?php

namespace App\Http\Controllers;

use App\Commission;
use App\Epreuve;
use App\Examen;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class EpreuveController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public  function add()
    {
        $commissions = Commission::all();
        $examens = Examen::all();
        return view('epreuve.add',['commissions'=>$commissions,'examens'=>$examens]);
    }
    public  function getAll()
    {
        //Pour la pagination
        // $list_examens = Examen::paginate(3);
       $list_epreuves = Epreuve::all();
        return view('epreuve.list',['list_epreuves'=>$list_epreuves]);
    }
    public  function edit($id)
    {
        $epreuve = Epreuve::find($id);
        $commissions = Commission::all();
        $examens = Examen::all();
        return view('epreuve.edit',['epreuve'=>$epreuve,'commissions'=>$commissions,'examens'=>$examens]);
    }
    public  function update(Request $request)
    {
        $epreuve = Epreuve::find($request->id);
        $epreuve->nomEpreuve = $request->nomEpreuve;
        $epreuve->heureDebut = $request->heureDebut;
        $epreuve->heureFin = $request->heureFin;
        $epreuve->examens_id = $request->examen;
        $epreuve->commissions_id = $request->commission;
        //ajout a la base
        $result = $epreuve->save();// 1 ou 0*/
        return redirect('/epreuve/getAll');
    }
    public  function delete($id)
    {
        $epreuve = Epreuve::find($id);
        if($epreuve != null)
        {
            $epreuve->delete();
        }
        return redirect('/epreuve/getAll');
    }

    public function persist(Request $request)
    {
        //return $this->getAll();
        $epreuve = new Epreuve();
        $epreuve->nomEpreuve = $request->nomEpreuve;
        $epreuve->heureDebut = $request->heureDebut;
        $epreuve->heureFin = $request->heureFin;
        $epreuve->examens_id = $request->examen;
        $epreuve->commissions_id = $request->commission;
        //ajout a la base
        $result = $epreuve->save();// 1 ou 0
        $commissions = Commission::all();
        $examens = Examen::all();
        return view('epreuve.add',['commissions'=>$commissions,'examens'=>$examens]);
       // return view('inscription.add', ['confirmation'=> $result,'examens'=>$examens,'eleves'=>$eleves,'users'=>$users]);
    }
}
