<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convocation extends Model
{
    protected $fillable = array( 'libelle', 'date','enseignants_id');
    public static $rules = array('libelle'=>'required|min:4',
        'date'=>'required|min:10',
        'enseignants_id'=>'required|integer'
    );
    public function enseignant()
    {
        return $this->belongsTo('App\Enseignant');
    }
}
