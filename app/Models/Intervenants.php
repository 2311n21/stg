<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intervenants extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_intervenant',
        'nom',
        
    ];
}
