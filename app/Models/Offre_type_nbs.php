<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre_type_nbs extends Model
{
    use HasFactory;
    public function offre_stages() {
      return $this -> belongsTo(OffreStage::class);
    }

    public function offre_stages() {
      return $this -> belongsTo(Type_stage::class);
    }
}
