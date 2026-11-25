<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SequenceS extends Model
{
    protected $fillable= [
        'code',
        'nom',
        'descreption',
    ];
}
