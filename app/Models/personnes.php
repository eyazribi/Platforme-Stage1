<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personnes extends Model
{
    use HasFactory;
    public function awards() {
      return $this -> hasMany(Award::class);
    }

    public function formations() {
      return $this -> hasMany(Formation::class);
    }

    public function work_experience() {
      return $this -> hasMany(Work_experience::class);
    }

    public function personnes_niveaux() {
      return $this -> hasMany(etudiant_langue_niveau::class);
    }

    public function personnes_skills() {
      return $this -> hasMany(etudiant_skills_niveau::class);
    }

    public function personnes_offre_stage() {
      return $this -> hasMany(Etudiant_offre::class);
    }
}
