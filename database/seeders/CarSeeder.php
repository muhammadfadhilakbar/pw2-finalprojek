<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    public function run(): void
    {
        Car::create([
            'name' => 'Kijang',
            'photo' => 'kijang.jpg',
            'type_id' => 1,
            'cost_per_day' => '3500000',
            'year' => '2023',
            'license_plate' => 'K 17417 G'
        ]);
        Car::create([
            'name' => 'Honda Mobilio',
            'photo' => 'mobilio.jpg',
            'type_id' => 2,
            'cost_per_day' => '4600000',
            'year' => '2023',
            'license_plate' => 'YH 317 TE'
        ]);
        Car::create([
            'name' => 'Alphard',
            'photo' => 'alphard.jpg',
            'type_id' => 3,
            'cost_per_day' => '9000000',
            'year' => '2024',
            'license_plate' => 'C 456'
        ]);
        Car::create([
            'name' => 'Yaris',
            'photo' => 'yaris.jpg',
            'type_id' => 4,
            'cost_per_day' => '5000000',
            'year' => '2023',
            'license_plate' => 'A 1774 Y'
        ]);
           }
}
