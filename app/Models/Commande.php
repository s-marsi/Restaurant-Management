<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    public function plats(){
      return $this->belongsToMany(Plat::class)->withTimestamps()->withPivot("nombre");
    }

    public function serveur(){
      return $this->belongsTo(Serveur::class);
    }
}
