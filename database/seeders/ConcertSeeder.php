<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Concert;

class ConcertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Concert::insert([
            [
                'nom' => 'Rosalia',
                'data_hora' => '2027-06-15 20:00:00',
                'durada_minuts' => 90,
                'tipus' => 'CONCERT',
                'artistes_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Cazzu',
                'data_hora' => '2027-06-16 21:00:00',
                'durada_minuts' => 60,
                'tipus' => 'DJ_SET',
                'artistes_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Karol G',
                'data_hora' => '2027-06-17 19:00:00',
                'durada_minuts' => 45,
                'tipus' => 'SHOWCASE',
                'artistes_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Prince Royce',
                'data_hora' => '2027-06-18 20:00:00',
                'durada_minuts' => 75,
                'tipus' => 'CONCERT',
                'artistes_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Farruko',
                'data_hora' => '2027-06-19 21:00:00',
                'durada_minuts' => 60,
                'tipus' => 'DJ_SET',
                'artistes_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Tokio Hotel',
                'data_hora' => '2027-06-20 20:30:00',
                'durada_minuts' => 90,
                'tipus' => 'CONCERT',
                'artistes_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Pablo Alboran',
                'data_hora' => '2027-06-21 19:00:00',
                'durada_minuts' => 45,
                'tipus' => 'ACUSTIC',
                'artistes_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Shakira',
                'data_hora' => '2027-06-22 21:00:00',
                'durada_minuts' => 90,
                'tipus' => 'CONCERT',
                'artistes_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Rosalia Acustic',
                'data_hora' => '2027-06-23 19:00:00',
                'durada_minuts' => 40,
                'tipus' => 'ACUSTIC',
                'artistes_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Cazzu Showcase',
                'data_hora' => '2027-06-24 20:00:00',
                'durada_minuts' => 30,
                'tipus' => 'SHOWCASE',
                'artistes_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Karol G DJ Set',
                'data_hora' => '2027-06-25 22:00:00',
                'durada_minuts' => 60,
                'tipus' => 'DJ_SET',
                'artistes_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Prince Royce Acustic',
                'data_hora' => '2027-06-26 19:30:00',
                'durada_minuts' => 45,
                'tipus' => 'ACUSTIC',
                'artistes_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Farruko Showcase',
                'data_hora' => '2027-06-27 20:00:00',
                'durada_minuts' => 30,
                'tipus' => 'SHOWCASE',
                'artistes_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Tokio Hotel Showcase',
                'data_hora' => '2027-06-28 20:30:00',
                'durada_minuts' => 40,
                'tipus' => 'SHOWCASE',
                'artistes_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Shakira DJ Set',
                'data_hora' => '2027-06-29 22:00:00',
                'durada_minuts' => 60,
                'tipus' => 'DJ_SET',
                'artistes_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
