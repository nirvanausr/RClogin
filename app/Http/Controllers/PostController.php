<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller


{



    //cette espace est résérvé au gerant d'un labo
    public function acceuilgerant(){

        return view('labo.gerant.acceuil');
    }
    public function listemedecin(){

        return view('labo.gerant.listemedecin');
    }

    public function listesecretaire(){

        return view('labo.gerant.listesecretaire');
    }
    public function adduser(){

        return view('labo.gerant.adduser');
    }


}
