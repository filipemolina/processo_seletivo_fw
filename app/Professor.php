<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    // Fillables



    // Relacionamentos

    public function cargo()
    {
    	return $this->belongsTo('App\Cargo');
    }

    public function experiencias()
    {
    	return $this->hasMany('App\Experiencia');
    }

    public function formacaos()
    {
    	return $this->belongsToMany('App\Formacao');
    }
}
