<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work_experience extends Model
{
    use HasFactory;
    public function etudiant() {
      return $this -> belongsTo(Etudiant::class);
    }
}
