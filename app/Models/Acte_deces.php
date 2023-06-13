<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class acte_deces extends Model
{
    use HasFactory;

    protected $fillable = [
        'civilite',
        'date',
        'lieu',
        'nom',
        'prenom',
        'date_naissance',

    ];

    protected $primaryKey = 'id';

}
