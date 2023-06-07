<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    use HasFactory;
    public function composants(){
      return $this->belongsToMany(Composant::class)->withTimestamps()->withPivot("quantite", "unite");
    }

    public function commandes(){
      return $this->belongsToMany(Commande::class)->withTimestamps()->withPivot("nombre");
    }

    public function categorie(){
      return $this->belongsTo(Categorie::class);
    }
    public function getPhoto(){
      return $this->photo?? "plats/default.png";
    }
    public function nombreCommandes(){
      return $this->commandes->sum(function($commande){
        return $commande->pivot->nombre;
      });
    }
}
