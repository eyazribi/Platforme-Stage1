<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OffreStage extends Model
{
    use HasFactory;

    public function company() {
      return $this -> belongsTo(Company::class);
    }

    public function personnes_offre_stage() {
      return $this -> hasMany(Etudiant_offre::class);
    }

    public function offre_stages() {
      return $this -> hasMany(Offre_type_nbss::class);
    }
}
