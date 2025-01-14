<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    use HasFactory;

    protected $filllable = ['id', 'price', 'type_pagament', 'address', 'status', 'datetime'];

}