<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class niveaux extends Model
{
    use HasFactory;
    public functin etudiant() {
      return $this -> hasMany(Etudiant::class);
    }

    public function department() {
      return $this -> belongsTo(department::class);
    }
}
