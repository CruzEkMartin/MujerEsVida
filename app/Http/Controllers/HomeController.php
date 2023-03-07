<?php

namespace App\Http\Controllers;

use App\Models\Modulo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function modulos()
    {
        //llamamos a todos los puntos para mapearlos
        $modulos = Modulo::where('status', "1")->get();
        //dd($modulos);
        return view('mapa_modulos', compact('modulos'));
    }

}
