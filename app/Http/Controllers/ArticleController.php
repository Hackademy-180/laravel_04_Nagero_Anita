<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class ArticleController extends Controller
{


  public $stagioni = [
    ['id' => 0,
    'name' => 'Primavera',
    'content' => 'Stagione che ad inizio anno si cataloga come prima',
    'details'=> 'Primavera ce del sole, si sta bene a farsi un abella camminata',

            'immagine' => 'https://plus.unsplash.com/premium_photo-1673799490772-2ea0b711e43b?q=80&w=722&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
   
    ],

    ['id'=> 1,
    'name'=>'Estate',
    'content'=>'Stagione catalogata come seconda',
    'details'=>'In Estate molti si spostano in vacanza, essendo la + calda di stagione',
            'immagine' => 'https://plus.unsplash.com/premium_photo-1682535209719-839f625f8770?q=80&w=692&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],




    ['id'=> 2,
     'name'=>'Autunno',
    'content'=>'Stagione catalogata come terza',
    'details'=> 'Autunno stagione nel quale abbiamo una mutazione ambientale visibile dai colori',
            'immagine' => 'https://images.unsplash.com/photo-1507371341162-763b5e419408?q=80&w=1339&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],

    ['id'=>3,
    'name'=>'Inverno',
    'content'=>'Stagione ultima',
    'details'=> 'Inverno, gelida e rigida stagione.In molti paesi hanno anche la neve. ',
            'immagine' => 'https://images.unsplash.com/photo-1480775292373-5175d0634811?q=80&w=1472&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D']



        ];


    //
    public function home(){
        return view('homepage');
    }

    public function indice(){
       
        return view('details.paginaIndice', [
            'stagioni'=> $this->stagioni
        ]);
    }


    public function details($id)
    {
        return view('details.paginaDetails', [
            'stagione' => $this->stagioni[$id]
        ]);
    }

}

//   DENTRO AL CONTROLLER CLASSI, PROPRIETà E METODI.