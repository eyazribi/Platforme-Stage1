<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OffreStage extends Model
{
    use HasFactory;
    public function offreStage() {
      return $this -> hasMany(etudiant_offre::class);
    }

    public function offresStage() {
      return $this -> hasMany(Offre_stage_nbs::class);
    }

    public function company() {
      return $this -> belongsTo(Company::class);
    }
}
