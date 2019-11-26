<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board_function extends Model
{
    public function flights()
    {
        return $this->hasMany('App\Flight');
    }
}
