<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Centre extends Model
{
    protected $fillable = array( 'nom','adresse','academies_id');
    public static $rules = array('nom'=>'required|min:1',
        'adresse'=>'required|min:2',
        'academies_id'=>'required|integer'
    );
    public function jury()
    {
        return $this->hasMany('App\Jury');
    }
    public function academie()
    {
        return $this->belongsTo('App\Academie');
    }
}
