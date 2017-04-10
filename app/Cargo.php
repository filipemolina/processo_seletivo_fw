<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    // Fillables



    // Relacionamentos

    public function professors()
    {
    	return $this->hasMany('App\Professor');
    }
}
