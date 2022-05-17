<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    public function personnes_skills() {
      return $this -> hasMany(etudiant_skills_niveau::class);
    }
}
