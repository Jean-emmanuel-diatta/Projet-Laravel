<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    protected $fillable = array( 'matricule',
        'nom',
        'prenom',
        'telephone',
        'adresse',
        'ville',
        'commissions_id',
        'etablissements_id'
    );
    public static $rules = array('numInscription'=>'required|min:4',
        'matricule'=>'required|min:8',
        'nom'=>'required|min:2',
        'prenom'=>'required|min:3',
        'telephone'=>'required|min:9',
        'adresse'=>'required|min:2',
        'ville'=>'required|min:1',
        'commissions_id'=>'required|integer',
        'etablissements_id'=>'required|integer'
    );
    public function commission()
    {
        return $this->belongsTo('App\Commission');
    }
    public function etablissement()
    {
        return $this->belongsTo('App\Etablissement');
    }
    public function convocation()
    {
        return $this->hasOne('App\Convocation');
    }
}
