<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddRoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addrooms')->insert([
            [
                'room_number' => '101',
                'floor' => 1,
                'price' => 150.00,
                'room_type' => 'Standard',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'room_number' => '202',
                'floor' => 2,
                'price' => 200.00,
                'room_type' => 'Deluxe',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'room_number' => '303',
                'floor' => 3,
                'price' => 250.00,
                'room_type' => 'Suite',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'room_number' => '404',
                'floor' => 4,
                'price' => 180.00,
                'room_type' => 'Standard',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'room_number' => '505',
                'floor' => 5,
                'price' => 300.00,
                'room_type' => 'Deluxe',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
