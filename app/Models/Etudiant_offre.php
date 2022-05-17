<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant_offre extends Model
{
    use HasFactory;

    public function personnes_offres_stage() {
      return $this -> belongsTo(personnes::class);
    }

    public function personnes_offre_stage() {
      return $this -> belongsTo(OffreStage::class);
    }
}
