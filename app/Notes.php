<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notes extends Model
{
    protected $fillable = array( 'libelle','eleves_id','epreuves_id');
    public static $rules = array('code'=>'required|min:4',
        'libelle'=>'required|min:2',
        'eleves_id'=>'required|integer',
        'epreuves_id'=>'required|integer'
    );

    public function eleves()
    {
        return $this->belongsTo('App\Eleve');
    }
    public function epreuves()
    {
        return $this->belongsTo('App\Epreuve');
    }
}
