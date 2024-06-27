<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'ali',
                'email' => 'ali@example.com',
                'usertype' => 1,
                'phone' => '1234567890',
                'address' => '123 Main St, City',
                'join_date' => '2023-01-01',
                'birth_date' => '1990-01-01',
                'role' => 'Admin',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => null,
                'current_team_id' => null,
                'profile_photo_path' => null,
                'filename' => 'profile_picture_ali.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ahmad',
                'email' => 'ahmad@example.com',
                'usertype' => 2,
                'phone' => '9876543210',
                'address' => '456 Oak St, Town',
                'join_date' => '2023-02-01',
                'birth_date' => '1985-05-15',
                'role' => 'User',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => null,
                'current_team_id' => null,
                'profile_photo_path' => null,
                'filename' => 'avatar_ahmad.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'sudais',
                'email' => 'sudais@example.com',
                'usertype' => 1,
                'phone' => '5551234567',
                'address' => '789 Maple Ave, Village',
                'join_date' => '2023-03-01',
                'birth_date' => '1992-08-20',
                'role' => 'Admin',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => null,
                'current_team_id' => null,
                'profile_photo_path' => null,
                'filename' => 'profile_picture_sudais.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'umair',
                'email' => 'umair@example.com',
                'usertype' => 2,
                'phone' => '9998765432',
                'address' => '101 Pine Blvd, Hamlet',
                'join_date' => '2023-04-01',
                'birth_date' => '1994-03-10',
                'role' => 'User',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => null,
                'current_team_id' => null,
                'profile_photo_path' => null,
                'filename' => 'avatar_umair.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'farhan',
                'email' => 'farhan@example.com',
                'usertype' => 1,
                'phone' => '1112223333',
                'address' => '456 Cedar Lane, Borough',
                'join_date' => '2023-05-01',
                'birth_date' => '1988-12-05',
                'role' => 'Admin',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => null,
                'current_team_id' => null,
                'profile_photo_path' => null,
                'filename' => 'profile_picture_farhan.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
