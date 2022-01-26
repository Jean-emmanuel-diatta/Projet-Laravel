<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    protected $fillable = array( 'matricule',
        'nom',
        'prenom',
        'email',
        'dateNaissance',
        'lieuNaissance',
        'classe',
        'etablissements_id'
    );
    public static $rules = array('matricule'=>'required|min:1',
        'nom'=>'required|min:2',
        'prenom'=>'required|min:3',
        'email'=>'required|min:3',
        'dateNaissance'=>'required|min:10',
        'lieuNaissance'=>'required|min:2',
        'classe'=>'required|min:2',
        'etablissements_id'=>'required|integer'
    );
    public function inscription()
    {
        return $this->hasOne("App\Inscription");
    }
    public function etablissement()
    {
        return $this->belongsTo("App\Etablissement");
    }
    public function epreuves()
    {
        return $this->belongsToMany("App\Epreuve");
    }
    public function notes()
    {
        return $this->hasMany('App\Notes');
    }
}
