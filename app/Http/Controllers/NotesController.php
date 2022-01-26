<?php

namespace App\Http\Controllers;

use App\Eleve;
use App\Epreuve;
use App\Examen;
use App\notes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public  function add()
    {
        $epreuves = Epreuve::all();
        $eleves = Eleve::all();
        return view('notes.add',['epreuves'=>$epreuves,'eleves'=>$eleves]);
    }
    public  function getAll()
    {
        //Pour la pagination
        // $list_examens = Examen::paginate(3);
        $list_notes = notes::all();
        return view('notes.list',['list_notes'=>$list_notes]);
    }
    public  function edit($id)
    {
        $note = notes::find($id);
        $eleves = Eleve::all();
        $epreuves = Examen::all();
        return view('notes.edit', ['note'=>$note,'epreuves'=>$epreuves,'eleves'=>$eleves]);
    }
    public  function update(Request $request)
    {
        $note = notes::find($request->id);
        $note->appreciation = $request->appreciation;
        $note->eleve = $request->eleve;
        $note->epreuve = $request->epreuve;
        $note->noteObtenue = $request->noteObtenue;
        //ajout a la base
        $result = $note->save();// 1 ou 0*/
        return redirect('/notes/getAll');
    }
    public  function delete($id)
    {
        $note = notes::find($id);
        if($note != null)
        {
            $note->delete();
        }
        return redirect('/notes/getAll');
    }

    public function persist(Request $request)
    {
        //return $this->getAll();
        $note = new notes();
        $note->appreciation = $request->appreciation;
        $note->eleve = $request->eleve;
        $note->epreuve = $request->epreuve;
        $note->noteObtenue = $request->noteObtenue;
        //ajout a la base
        $result = $note->save();// 1 ou 0
        $eleves = Eleve::all();
        $epreuves = Epreuve::all();
        return view('notes.add',['confirmation'=> $result,'eleves'=>$eleves,'epreuves'=>$epreuves]);
    }
}
