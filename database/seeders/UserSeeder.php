<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Jake',
                'email' => 'jake@gmail.com',
                'password' => Hash::make('12345678'),
                'contact' => '01531536625',
                'passport' => 'BR01279815',
                'is_admin' => 0,
                'points' => 0
            ],
            [
                'name' => 'Ron',
                'email' => 'ron@gmail.com',
                'password' => Hash::make('12345678'),
                'contact' => '01563426235',
                'passport' => 'BR01147515',
                'is_admin' => 0,
                'points' => 0
            ],
            [
                'name' => 'Blake',
                'email' => 'blake@gmail.com',
                'password' => Hash::make('12345678'),
                'contact' => '01531265425',
                'passport' => 'BR01285345',
                'is_admin' => 1,
                'points' => 0
            ]

    ]);
    }
}
