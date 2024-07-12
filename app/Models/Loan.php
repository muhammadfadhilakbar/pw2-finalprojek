<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = ['car_id', 'user', 'loan_date', 'return_date', 'total_cost', 'status'];

    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }

   
}
