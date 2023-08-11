<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_ao',
        'id_pv',
        'aon',
        'intitule',
        'date',
        'mt_acquisition',
        'mt_maintenance',
        'duree_proj',
        'consistance',
        'duree_garantie',
        'date_prov',
        'date_def',
        'garantie',
        'frequence_visite',
        'pv_prov',
        'pv_def',
        'type',
        'duree_maintenance',
        'type_maintenance',
        'nb_jour_assis',
    ];
}
