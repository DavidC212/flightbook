<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = ['date','glider_id','nature_id','board_function_id','double_control','captain','instructor'];

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
