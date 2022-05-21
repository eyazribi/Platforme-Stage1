<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OffreStage extends Model
{
    use HasFactory;
    public function offreStage() {
      return $this -> hasMany(etudiant_offre::class);
    }

    public function offresStage() {
      return $this -> hasMany(Offre_stage_nbs::class);
    }

    public function company() {
      return $this -> belongsTo(Company::class);
    }

    public function scopeFilter($query, array $filter) {
      if (array_key_exists('tags', $filter)) {
        $query -> where('tags', 'like', '%'.request('tags').'%');
      } else if (array_key_exists('search', $filter)) {
        $query -> where('tags', 'like', '%'.request('search').'%') -> orWhere('job_title', 'like' , '%'.request('search').'%')
        -> orWhere('description', 'like' , '%'.request('search').'%');
      }
    }
}
