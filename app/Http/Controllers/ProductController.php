<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $cars = Car::all();

        return view('product', compact('cars'));
    }
}