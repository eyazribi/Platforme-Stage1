<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant_skills_niveau extends Model
{
    use HasFactory;
    public function personnes_skills() {
      return $this -> hasMany(personnes::class);
    }

    public function personnes_skill() {
      return $this -> hasMany(Skill::class);
    }
}
