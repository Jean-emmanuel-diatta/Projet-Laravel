<?php

namespace App\Http\Controllers;

use App\Academie;
use App\Centre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CentreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public  function add()
    {
        $academies = Academie::all();
        return view('centre.add',['academies'=>$academies]);
    }
    public  function getAll()
    {
        //Pour la pagination
        // $list_examens = Examen::paginate(3);
        $list_centres = Centre::all();
        return view('centre.list',['list_centres' => $list_centres]);
    }
    public  function edit($id)
    {
        $centre = Centre::find($id);
        $academies = Academie::all();
        return view('centre.edit', ['centre'=>$centre, 'academies'=>$academies]);
    }
    public  function update(Request $request)
    {
        $centre = Centre::find($request->id);
        $centre->nom = $request->nom;
        $centre->adresse = $request->adresse;
        $centre->academies_id = $request->academie;
        //ajout a la base
        $result = $centre->save();// 1 ou 0*/
        return redirect('/centre/getAll');
    }
    public  function delete($id)
    {
        $centre = Centre::find($id);
        if($centre != null)
        {
            $centre->delete();
        }
        return redirect('/centre/getAll');
    }

    public function persist(Request $request)
    {
        //return $this->getAll();
        $centre = new Centre();
        $centre->nom = $request->nom;
        $centre->adresse = $request->adresse;
        $centre->academies_id = $request->academie;
        $centre->academies_id = $request->academie;
        //ajout a la base
        $result = $centre->save();// 1 ou 0*/
        $academies = Academie::all();
        return view('centre.add', ['confirmation'=> $result, 'academies'=>$academies]);
    }
}
