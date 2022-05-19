<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant_skills_niveau extends Model
{
    use HasFactory;
    public function etudiant_skills_niveau() {
      return $this -> belongsTo(Etudiant::class);
    }

    public function etudiants_skills_niveau() {
      return $this -> belongsTo(skill::class);
    }
}
