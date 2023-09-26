<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AproposController extends Controller
{
    public function a_propos_de_nous(){
        return view('pages.AproposDeNous');
    }

    public function accueil(){
        return view('home');
    }

    public function devenir_un_client(){
        return view('pages.devenire-client');
    }

    public function credit_epargne_particuliers(){
        return view('pages.credit-epargne-particuliers');
    }

    public function produits_epargne(){
        return view('pages.produits-epargne');
    }

    public function produits_credit(){
        return view('pages.produits-credit');
    }

    public function produit_credit_salaries(){
        return view('pages.produit-credit-salaries');
    }

    public function nos_agences(){
        return view('pages.nos-agences');
    }

    public function notre_institution(){
        return view('pages.notre-institution');
    }

    public function notre_equipe(){
        return view('pages.notre-equipe');
    }

    public function actualites(){
        return view('pages.actualites');
    }

    public function temoignages(){
        return view('pages.temoignages-histoire');
    }

    public function contact(){
        return view('pages.contact');
    }

}
