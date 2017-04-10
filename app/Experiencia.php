<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{
    // Fillables



    // Relacionamentos

    public function professor()
    {
    	return $this->belongsTo('App\Professor');
    }
}
