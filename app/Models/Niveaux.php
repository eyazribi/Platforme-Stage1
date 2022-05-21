<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class niveaux extends Model
{
    use HasFactory;
    public function etudiant() {
      return $this -> hasMany(Etudiant::class);
    }

    public function department() {
      return $this -> belongsTo(department::class);
    }
}
