<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    protected $fillable = array( 'nomExamen','dateDebut','dateFin','academies_id');
    public static $rules = array('nomExamen'=>'required|min:3',
        'dateDebut'=>'required|min:5',
        'dateFin'=>'required|min:5',
        'academies_id'=>'required|integer'
    );
    public function epreuve()
    {
        return $this->hasMany('App\Epreuve');
    }
    public function inscription()
    {
        return $this->hasMany('App\Inscription');
    }
    public function academie()
    {
        return $this->belongsTo('App\Academie');
    }
}
