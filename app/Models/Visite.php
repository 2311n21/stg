<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visite extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_inter',
        'date_debut_prev',
        'date_reelle',
        'date_cloture',
        'commentaire',
        'statut',
        'action'
    ];
}
