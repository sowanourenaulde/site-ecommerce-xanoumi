<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $table="categories";


    protected $fillable = [
        'id',
        'libelle',
        'description',
        'file',
       
    ];

    public static $rules = [
        'libelle'       => 'required|string|max:15',
        'description'    => 'required|string',
       
    ];

    public function vehicules(){
        return $this->hasMany(Vehicule::class);
    }
}
