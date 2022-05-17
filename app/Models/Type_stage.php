<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_stage extends Model
{
    use HasFactory;
    public function offre_stages() {
      return $this -> hasMany(Offre_type_nbss::class);
    }
}
