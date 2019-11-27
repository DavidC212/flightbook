<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Glider;
use App\Nature;
use App\Board_function;
use App\Flight;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user=Auth::user();
        $flights = $user->flights()->get();
        return view('home',[
            'flights'=> $flights,
        ]);
        // $user_id=Auth::user()->id;
        // $flights = Flight::where('user_id',$user_id)->get();
        // return view('home',[
        //     'flights'=> $flights,
        // ]);
    }

    public function flight($id)
    {
        $flight = Flight::find($id);
        $user=Auth::user();
        if (isset($flight)) {
            if ($user->id == $flight->user_id) {
                return view('show',[
                    'flight'=> $flight,
                ]);
            }else{
                $nope = "Vous n'avez pas accès à ce vol !";
                return view('show',[
                    'nope'=> $nope,
                ]);
            }
        }else{
            $erreur = "Ce vol n'existe pas...";
            return view('show',[
                'erreur'=> $erreur,
            ]);
        }
    }

    public function create(){
        // code...
        return view('form');
    }

    public function store(){
        // code...
        $user=Auth::user();
        $flights = $user->flights()->get();
        return view('home',[
            'flights'=> $flights,
        ]);
    }
}
