<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_stage extends Model
{
    use HasFactory;
    public function offresStage() {
      return $this -> hasMany(offre_type_nbss::class);
    }

    public function etudiant_offre() {
      return $this -> hasMany(Etudiant_offre::class);
    }
}
