<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model{

    use HasFactory; //trait

    protected $fillable = [
        'street',
        'number',
        'neighborhood',
        'city',
        'state',
        'postal code',
    ];
}