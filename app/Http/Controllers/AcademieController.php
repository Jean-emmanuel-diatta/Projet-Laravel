<?php

namespace App\Http\Controllers;


use App\Academie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AcademieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public  function add()
    {
        return view('academie.add');
    }
    public  function getAll()
    {
        //Pour la pagination
        $list_academies = Academie::paginate(3);
        //$list_academies = Academie::all();
        return view('academie.list',['list_academies' => $list_academies]);
    }
    public  function edit($id)
    {
        $academie = Academie::find($id);
        return view('academie.edit', ['academie'=>$academie]);
    }
    public  function update(Request $request)
    {
        $academie = Academie::find($request->id);
        $academie->nomAcademie = $request->nomAcademie;
        $academie->adresseAcademie = $request->adresseAcademie;
        //ajout a la base
        $result = $academie->save();// 1 ou 0*/
        return redirect('/academie/getAll');
    }
    public  function delete($id)
    {
        $academie = Academie::find($id);
        if($academie != null)
        {
            $academie->delete();
        }
        return redirect('/examen/getAll');
    }

   public function persist(Request $request)
    {
        //return $this->getAll();
       // echo $request->nomAcademie;
       $academie = new Academie();
        $academie->nomAcademie = $request->nomAcademie;
        $academie->adresseAcademie = $request->adresseAcademie;
        //ajout a la base
        $result = $academie->save();// 1 ou 0*/
        return view('academie.add', ['confirmation'=> $result]);
    }
}
