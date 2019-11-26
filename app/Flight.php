<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function board_function()
    {
        return $this->belongsTo('App\Board_function');
    }
    public function nature()
    {
        return $this->belongsTo('App\Nature');
    }
    public function glider()
    {
        return $this->belongsTo('App\Glider');
    }
}
