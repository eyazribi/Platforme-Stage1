<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offre_type_nbs extends Model
{
    use HasFactory;
    public function offresStage() {
      return $this -> belongsTo(OffreStage::class);
    }

    public function offresStages() {
      return $this -> belongsTo(Type_stage::class);
    }
}
