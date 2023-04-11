<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Roti;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'dara',
            'username' => 'dara001',
            'password' => Hash::make('dara001'),
            'email' => 'dara001@gmail.com',
        ]);
        Roti::insert([
            [
                "nama" => "Roti gulung",
                "merk" => "Sari Roti",
                "rasa" => "Keju",
                "kadaluarsa" => "2023-01-01",
                "berat" => 32,
                "harga" => 4000,
                "qty" => 100
            ],
            [
                "nama" => "Roti Bakar",
                "merk" => "Sari Roti",
                "rasa" => "Keju",
                "kadaluarsa" => "2023-01-01",
                "berat" => 32,
                "harga" => 4000,
                "qty" => 100
            ],
            [
                "nama" => "Roti Goreng",
                "merk" => "Sari Roti",
                "rasa" => "Keju",
                "kadaluarsa" => "2023-01-01",
                "berat" => 32,
                "harga" => 4000,
                "qty" => 100
            ],
            [
                "nama" => "Roti Rebus",
                "merk" => "Sari Roti",
                "rasa" => "Keju",
                "kadaluarsa" => "2023-01-01",
                "berat" => 32,
                "harga" => 4000,
                "qty" => 100
            ],
            [
                "nama" => "Roti Sisir",
                "merk" => "Sari Roti",
                "rasa" => "Keju",
                "kadaluarsa" => "2023-01-01",
                "berat" => 32,
                "harga" => 4000,
                "qty" => 100
            ],
            [
                "nama" => "Roti Kukus",
                "merk" => "Sari Roti",
                "rasa" => "Keju",
                "kadaluarsa" => "2023-01-01",
                "berat" => 32,
                "harga" => 4000,
                "qty" => 100
            ],
            [
                "nama" => "Roti Tawar",
                "merk" => "Sari Roti",
                "rasa" => "Keju",
                "kadaluarsa" => "2023-01-01",
                "berat" => 32,
                "harga" => 4000,
                "qty" => 100
            ],
            [
                "nama" => "Roti Cina",
                "merk" => "Sari Roti",
                "rasa" => "Keju",
                "kadaluarsa" => "2023-01-01",
                "berat" => 32,
                "harga" => 4000,
                "qty" => 100
            ],
            [
                "nama" => "Roti Panggang",
                "merk" => "Sari Roti",
                "rasa" => "Keju",
                "kadaluarsa" => "2023-01-01",
                "berat" => 32,
                "harga" => 4000,
                "qty" => 100
            ],
            [
                "nama" => "Roti Sapi",
                "merk" => "Sari Roti",
                "rasa" => "Keju",
                "kadaluarsa" => "2023-01-01",
                "berat" => 32,
                "harga" => 4000,
                "qty" => 100
            ],
        ]);
    }
}
