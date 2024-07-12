<?php

namespace Database\Seeders;

use App\Models\Loan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Loan::create([
            'car_id' => 1,
            'user' => 'Bokap Faris',
            'loan_date' => '2024-12-06',
            'return_date' => '2024-07-08',
            'total_cost' => '4000000',
            'status' => 'dipinjam',
        ]);
        Loan::create([
            'car_id' => 2,
            'user' => 'Nyokap Fadil',
            'loan_date' => '2024-12-17',
            'return_date' => '2024-12-20',
            'total_cost' => '2000000',
            'status' => 'dipinjam',
        ]);
        Loan::create([
            'car_id' => 3,
            'user' => 'Kkjhe',
            'loan_date' => '2024-10-11',
            'return_date' => '2025-07-08',
            'total_cost' => '2700000',
            'status' => 'dipinjam',
        ]);
        Loan::create([
            'car_id' => 4,
            'user' => 'Rahman Al-sultan',
            'loan_date' => '2024-06-04',
            'return_date' => '2024-07-05',
            'total_cost' => '50000000',
            'status' => 'sudah kembali',
        ]);
          }
}

