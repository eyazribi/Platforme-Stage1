<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    // public $fillabe = ['nom','prenom', 'email', 'logo', 'password', 'adresse', 'cin', 'telephonne', 'niveauxes_id'];
    protected $guarded = [];
    public function formation() {
      return $this -> hasMany(Formation::class);
    }

    public function award() {
      return $this -> hasMany(Award::class);
    }

    public function work_experiences() {
      return $this -> hasMany(work_experience::class);
    }

    public function rapports() {
      return $this -> hasMany(rapport::class);
    }

    public function niveaux() {
      return $this -> belongsTo(niveaux::class);
    }

    public function etudiant_langue_niveau() {
      return $this -> hasMany(etudiant_langue_niveau::class);
    }

    public function etudiant_skills_niveau() {
      return $this -> hasMany(Etudiant_skills_niveau::class);
    }

    public function offreStage() {
      return $this -> hasMany(etudiant_offre::class);
    }
}
