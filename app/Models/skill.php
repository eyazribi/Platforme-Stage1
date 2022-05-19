<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skill extends Model
{
    use HasFactory;
    public function etudiant_skills_niveau() {
      return $this -> hasMany(Etudiant_skills_niveau::class);
    }
}
