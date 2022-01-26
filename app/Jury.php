<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jury extends Model
{
    protected $fillable = array( 'numero','nomPresidentJury','juries_id');
    public static $rules = array('numero'=>'required|min:3',
        'nomPresidentJury'=>'required|min:3',
        'juries_id'=>'required|integer'
    );
    public function centre()
    {
        return $this->belongsTo('App\Centre');
    }
}
