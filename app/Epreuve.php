<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Epreuve extends Model
{
    protected $fillable = array( 'nomEpreuve', 'heureDebut', 'heureFin','examens_id','commissions_id');
    public static $rules = array('libelle'=>'required|min:4',
        'heureDebut'=>'required|min:5',
        'heureFin'=>'required|min:5',
        'examens_id'=>'required|integer',
        'commissions_id'=>'required|integer'
    );
    public function commission()
    {
        return $this->belongsTo('App\Commission');
    }
    public function examen()
    {
        return $this->belongsTo('App\Examen');
    }
    public function academie()
    {
        return $this->belongsTo('App\Academie');
    }
    public function eleves()
    {
        return $this->belongsToMany('App\Eleve');
    }
    public function notes()
    {
        return $this->hasMany('App\Notes');
    }
}
