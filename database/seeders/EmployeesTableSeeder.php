<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'phone' => '1234567890',
                'address' => '123 Main St, City',
                'join_date' => '2023-01-01',
                'birth_date' => '1990-01-01',
                'role' => 'Manager',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'phone' => '9876543210',
                'address' => '456 Oak St, Town',
                'join_date' => '2023-02-01',
                'birth_date' => '1985-05-15',
                'role' => 'Assistant',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Michael Brown',
                'email' => 'michael.brown@example.com',
                'phone' => '5551234567',
                'address' => '789 Maple Ave, Village',
                'join_date' => '2023-03-01',
                'birth_date' => '1992-08-20',
                'role' => 'Developer',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Emily Davis',
                'email' => 'emily.davis@example.com',
                'phone' => '9998765432',
                'address' => '101 Pine Blvd, Hamlet',
                'join_date' => '2023-04-01',
                'birth_date' => '1994-03-10',
                'role' => 'Designer',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Christopher Wilson',
                'email' => 'chris.wilson@example.com',
                'phone' => '1112223333',
                'address' => '456 Cedar Lane, Borough',
                'join_date' => '2023-05-01',
                'birth_date' => '1988-12-05',
                'role' => 'Support',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
