<?php

namespace App\Http\Controllers;

use App\Centre;
use App\Jury;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class JuryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public  function add()
    {
        $centres = Centre::all();
        return view('jury.add',['centres'=>$centres]);
    }
    public  function getAll()
    {
        //Pour la pagination
        // $list_examens = Examen::paginate(3);
        $list_juries = Jury::all();
        return view('jury.list',['list_juries' => $list_juries]);
    }
    public  function edit($id)
    {
        $jury = Jury::find($id);
        $centres = Centre::all();
        return view('jury.edit', ['jury'=>$jury, 'centres'=>$centres]);
    }
    public  function update(Request $request)
    {
        $jury = Jury::find($request->id);
        $jury->numero = $request->numero;
        $jury->nomPresidentJury = $request->nomPresidentJury;
        $jury->centres_id = $request->centres;
        //ajout a la base
        $result = $jury->save();// 1 ou 0*/
        return redirect('/jury/getAll');
    }
    public  function delete($id)
    {
        $jury = Jury::find($id);
        if($jury != null)
        {
            $jury->delete();
        }
        return redirect('/jury/getAll');
    }

    public function persist(Request $request)
    {
        //return $this->getAll();
        $jury = new Jury();
        $jury->numero = $request->numero;
        $jury->nomPresidentJury = $request->nomPresidentJury;
        $jury->centres_id = $request->centre;
       // $centre->academies_id = $request->academie;
        //ajout a la base
        $result = $jury->save();// 1 ou 0*/
        $centres = Centre::all();
        return view('jury.add', ['confirmation'=> $result, 'centres'=>$centres]);
    }
}
