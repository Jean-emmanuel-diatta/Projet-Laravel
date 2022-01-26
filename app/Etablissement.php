<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    protected $fillable = array( 'code','nom','adresse','ville','eleves_id','academies_id');
    public static $rules = array('code'=>'required|min:4',
        'nom'=>'required|min:2',
        'adresse'=>'required|min:2',
        'ville'=>'required|min:2',
        'eleves_id'=>'required|integer',
        'academies_id'=>'required|integer'
    );
    public function enseignant()
    {
        return $this->hasMany('App\Enseignant');
    }
    public function eleve()
    {
        return $this->hasMany('App\Eleve');
    }
    public function academie()
    {
        return $this->belongsTo('App\Academie');
    }
}
