<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table="location";


    protected $fillable = [
        'id',
        'durée',
        'nb_vehicules',
        'date_debut',
        'date_end',
        'facture',
        'user_id',
        'vehicule_id',
        
       
    ];
}
