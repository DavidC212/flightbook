<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nature extends Model
{
    public function flights()
    {
        return $this->hasMany('App\Flight');
    }
}
