<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academie extends Model
{
    protected $fillable = array( 'nomAcademie','adresseAcademie');
    public static $rules = array('nomAcademie'=>'required|min:2',
        'adresseAcademie'=>'required|min:2',
    );
    public function centre()
    {
        return $this->hasMany('App\Centre');
    }
    public function etablissement()
    {
        return $this->hasMany('App\Etablissement');
    }
    public function epreuve()
    {
        return $this->hasMany('App\Epreuve');
    }
    public function examen()
    {
        return $this->hasMany('App\Examen');
    }
    public function commission()
    {
        return $this->hasMany('App\Commission');
    }
}
