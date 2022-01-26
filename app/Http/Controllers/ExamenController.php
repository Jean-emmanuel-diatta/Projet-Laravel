<?php

namespace App\Http\Controllers;

use App\Academie;
use App\Examen;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ExamenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public  function add()
    {
        $academies = Academie::all();
        return view('examen.add',['academies'=>$academies]);
    }
    public  function getAll()
    {
        //Pour la pagination
       // $list_examens = Examen::paginate(3);
        $list_examens = Examen::all();
        return view('examen.list',['list_examens' => $list_examens]);
    }
    public  function edit($id)
    {
        $examen = Examen::find($id);
        $academies = Academie::all();
        return view('examen.edit', ['examen'=>$examen, 'academies'=>$academies]);
    }
    public  function update(Request $request)
    {
        $examen = Academie::find($request->id);
        $examen->nomExamen = $request->nomExamen;
        $examen->dateDebut = $request->dateDebut;
        $examen->dateFin = $request->dateFin;
        $examen->academies_id = $request->academie;
        //ajout a la base
        $result = $examen->save();// 1 ou 0*/
        return redirect('/examen/getAll');
    }
    public  function delete($id)
    {
        $examen = Examen::find($id);
        if($examen != null)
        {
            $examen->delete();
        }
        return redirect('/examen/getAll');
    }

    public function persist(Request $request)
    {
        //return $this->getAll();
        $examen = new Examen();
        $examen->nomExamen = $request->nomExamen;
        $examen->dateDebut = $request->dateDebut;
        $examen->dateFin = $request->dateFin;
        $examen->academies_id = $request->academie;
        //ajout a la base
        $result = $examen->save();// 1 ou 0*/
        $academies = Academie::all();
        return view('examen.add', ['confirmation'=> $result, 'academies'=>$academies]);
    }
}
