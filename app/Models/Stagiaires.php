<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stagiaires extends Model
{
        protected $table = 'stagiaires';
        protected $fillable = [
        'nom',
        'prenom',
        'email',
        'datenaisance',
    ];
}
