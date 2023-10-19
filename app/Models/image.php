<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Etudiant;
class image extends Model
{
    use HasFactory;
    public function etudiant()
    { 
    return $this->belongsTo(Etudiant::class);
}
}
