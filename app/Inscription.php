<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    protected $fillable = array( 'numInscription','dateInscription','anneeAcademique','examens_id','eleves_id','users_id');
    public static $rules = array('numInscription'=>'required|min:4',
        'dateInscription'=>'required|min:8',
        'anneeAcademique'=>'required|min:4',
        'examens_id'=>'required|integer',
        'eleves_id'=>'required|integer',
        'users_id'=>'required|bigInteger'
    );
    public function examen()
    {
        return $this->belongsTo('App\Examen');
    }
    public function eleve()
    {
        return $this->belongsTo('App\Eleve');
    }
}
