<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projeto;
use App\Models\Social;

class SiteController extends Controller
{
    public function home()
    {
        $projetos = Projeto::all();
        $sociais = Social::all();

        return view('home', compact('projetos', 'sociais'));
        // return view('/home');
    }
    public function cv()
    {
        return view('/cv');
    }
}
