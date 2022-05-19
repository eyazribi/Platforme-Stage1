<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant_langue_niveau extends Model
{
    use HasFactory;
    public function etudiant_langue_niveau() {
      return $this -> belongsTo(Etudiant::class);
    }
    public function etudiants_langue_niveau() {
      return $this -> belongsTo(Langue::class);
    }
}
