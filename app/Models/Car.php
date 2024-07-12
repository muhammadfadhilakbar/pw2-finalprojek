<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'photo', 'type_id', 'cost_per_day', 'year', 'license_plate'];

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }
}
