<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Langue extends Model
{
    use HasFactory;
    public function personnes_niveaux() {
      return $this -> hasMany(etudiant_langue_niveau::class);
    }
}
