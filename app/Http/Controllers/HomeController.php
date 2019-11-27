<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Glider;
use App\Nature;
use App\Board_function;
use App\Flight;
use App\Http\Requests\StoreNewFlight;

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

    /**
     * Ça fait un truc.
     * use @method Yakaleer;
     *
     */
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

    /**
     * Ça create un truc.
     *
     */
    public function create(){
        // code...
        $gliders = Glider::all();
        $board_functions = Board_function::all();
        $natures = Nature::all();
        return view('form',[
            'gliders'=> $gliders,
            'board_functions'=> $board_functions,
            'natures'=> $natures,
        ]);
    }

    /**
     * Ça store un truc.
     *
     */
    public function store(StoreNewFlight $request){
        // code...
        $user=Auth::user();
        $newFlight=new Flight;
        $newFlight->fill($request->except(['_token']));
        $newFlight->user_id = $user->id;

        if ($newFlight->save()) {
            $request->session()->flash('status',"Vol enregistré avec succès");
            $request->session()->flash('alert-class',"alert-success");
            return redirect()->action('HomeController@index');
        }
    }

    /**
     * Et là y'a rien..
     *
     */
}
