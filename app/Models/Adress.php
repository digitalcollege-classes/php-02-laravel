<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adress extends Model{

    use HasFactory; //trait

    protected $fillable = [
        'id',
        'street',
        'number',
        'neighborhood',
        'city',
        'state',
        'postal code',
    ];
}