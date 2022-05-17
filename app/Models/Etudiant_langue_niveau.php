<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant_langue_niveau extends Model
{
    use HasFactory;
    public function personne_niveaux() {
      return $this -> belongsTo(personnes::class);
    }

    public function personnes_niveaux() {
      return $this -> belongsTo(Langue::class);
    }
}
