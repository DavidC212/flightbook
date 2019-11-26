<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Glider;
use App\Nature;
use App\Board_function;
use App\Flight;

class MonController extends Controller
{
    // public function index($n)
    // {
    //     $flights = Flight::all();
    //     return view('vue1',[
    //         'numero'=> $flights,
    //     ]);
    // }
    public function index()
    {
        return view('welcome');
    }
}
