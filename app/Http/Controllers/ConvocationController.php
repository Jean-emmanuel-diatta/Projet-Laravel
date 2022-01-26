<?php

namespace App\Http\Controllers;

use App\Convocation;
use App\Enseignant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ConvocationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public  function add()
    {
        $enseignants = Enseignant::all();
        return view('convocation.add',['enseignants'=>$enseignants]);
    }
    public  function getAll()
    {
        //Pour la pagination
        // $list_examens = Examen::paginate(3);
        $list_convocations = Convocation::all();
        return view('convocation.list',['list_convocations' => $list_convocations]);
    }
    public  function edit($id)
    {
        $convocation = Convocation::find($id);
        $enseignants = Enseignant::all();
        return view('convocation.edit', ['convocation'=>$convocation, 'enseignants'=>$enseignants]);
    }
    public  function update(Request $request)
    {
        $convocation = Convocation::find($request->id);
        $convocation->libelle = $request->libelle;
        $convocation->date = $request->date;
        $convocation->enseignants_id = $request->enseignant;
        //ajout a la base
        $result = $convocation->save();// 1 ou 0*/
        return redirect('/convocation/getAll');
    }
    public  function delete($id)
    {
        $convocation = Convocation::find($id);
        if($convocation != null)
        {
            $convocation->delete();
        }
        return redirect('/convocation/getAll');
    }

    public function persist(Request $request)
    {
        //return $this->getAll();
        $convocation = new Convocation();
        $convocation->libelle = $request->libelle;
        $convocation->date = $request->date;
        $convocation->enseignants_id = $request->enseignant;
        //ajout a la base
        $result = $convocation->save();// 1 ou 0*/
        $enseignants = Enseignant::all();
        return view('convocation.add', ['confirmation'=> $result, 'enseignants'=>$enseignants]);
    }
}
