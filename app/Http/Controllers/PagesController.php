<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //VEDIAMO LE PAGINE, logica organizzata e seo stabilita ; 

    
    public function home(){
        return view('homepage');
    }

}
