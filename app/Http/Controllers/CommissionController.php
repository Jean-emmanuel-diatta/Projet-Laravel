<?php

namespace App\Http\Controllers;

use App\Academie;
use App\Commission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CommissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public  function add()
    {
        $academies = Academie::all();
        return view('commission.add',['academies'=>$academies]);
    }
    public  function getAll()
    {
        //Pour la pagination
        // $list_examens = Examen::paginate(3);
        $list_commissions = Commission::all();
        return view('commission.list',['list_commissions' => $list_commissions]);
    }
    public  function edit($id)
    {
        $commission = Commission::find($id);
        $academies = Academie::all();
        return view('commission.edit', ['commission'=>$commission, 'academies'=>$academies]);
    }
    public  function update(Request $request)
    {
        $commission = Commission::find($request->id);
        $commission->dateDeRencontre = $request->dateDeRencontre;
        $commission->libelle = $request->libelle;
        $commission->academies_id = $request->academie;
        //ajout a la base
        $result = $commission->save();// 1 ou 0*/
        return redirect('/commission/getAll');
    }
    public  function delete($id)
    {
        $commission = Commission::find($id);
        if($commission != null)
        {
            $commission->delete();
        }
        return redirect('/commission/getAll');
    }

    public function persist(Request $request)
    {
        //return $this->getAll();
        $commission = new Commission();
        $commission->dateDeRencontre = $request->dateDeRencontre;
        $commission->libelle = $request->libelle;
        $commission->academies_id = $request->academie;
        //ajout a la base
        $result = $commission->save();// 1 ou 0*/
        $academies = Academie::all();
        return view('commission.add', ['confirmation'=> $result, 'academies'=>$academies]);
    }
}
