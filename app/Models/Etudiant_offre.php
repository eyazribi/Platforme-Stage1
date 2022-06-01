<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant_offre extends Model
{
    use HasFactory;
    public function offreStage() {
      return $this -> belongsTo(Etudiant::class);
    }

    public function offre() {
      return $this -> belongsTo(OffreStage::class);
    }

    public function type_stge() {
      return $this -> belongsTo(Type_stage::class);
    }
}
