<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::create([
            'name' => 'Family',
            'description' => 'Toyota Kijang adalah model kendaraan niaga yang kemudian bertransformasi menjadi mobil keluarga '  ]);
        Type::create([
            'name' => 'Together',
            'description' => 'Mobilio ditenagai oleh 1496cc 4-silinder Bensin Mesin menghasilkan tenaga 116 hp dengan torsi 145 Nm. Dilengkapi dengan pilihan transmisi 5-Speed Manual'
        ]);
        Type::create([
            'name' => 'Expensive',
            'description' => 'Harga Toyota Alphard di Indonesia dimulai dari Rp 1,407 Milyar untuk varian dasar 2.5L X CVT dan naik hingga Rp 1,711 Milyar untuk varian tertinggi.'   ]);
        Type::create([
            'name' => 'Good',
            'description' => 'Toyota Yaris 2024 Harga Terbaru, Spesifikasi dan Promo · YARIS 1.5 GR Sport CVT (Two Tone). Rp. 345.400.000 · YARIS 1.5 GR Sport CVT (One Tone). Rp. 341.400.000.'    ]);
       
    }

}
