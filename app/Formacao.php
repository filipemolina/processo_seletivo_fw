<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formacao extends Model
{
    // Fillables



    // Relacionamentos

    public function professors()
    {
    	return $this->belongsToMany('App\Professor');
    }
}
