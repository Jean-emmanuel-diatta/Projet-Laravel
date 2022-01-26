<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    protected $fillable = array( 'dateDeRencontre','libelle','academies_id');
    public static $rules = array('dateDeRencontre'=>'required|min:10',
        'libelle'=>'required|min:20',
        'academies_id'=>'required|integer'
    );
    public function enseignant()
    {
        return $this->hasMany('App\Enseignant');
    }
    public function epreuve()
    {
        return $this->hasMany('App\Epreuve');
    }
    public function academie()
    {
        return $this->belongsTo('App\Academie');
    }
}
