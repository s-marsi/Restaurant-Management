<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function index(){
      $categories = Categorie::all();
      if(auth()->user()->role == "serveur"){
        return view("visiteur.dashbord.index", compact("categories"));
      }
    }
}
