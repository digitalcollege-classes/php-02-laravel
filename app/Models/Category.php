<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    private function cleanString($value)
    {
        return trim($value, " \t\n\r");
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $this->cleanString($value);
    }

    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = $this->cleanString($value);
    }

    public function setImageAttribute($value)
    {
        $this->attributes['image'] = $this->cleanString($value);
    }
}
