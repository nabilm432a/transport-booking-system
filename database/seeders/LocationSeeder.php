<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('locations')->insert([
            [
                'station' => 'Central Station',
                'city' => 'Dhaka',
                'region' => 'Dhaka',
                'country' => 'Bangladesh'
            ],
            [
                'station' => 'North Station',
                'city' => 'Chittagong',
                'region' => 'Chittagong',
                'country' => 'Bangladesh'
            ],
            [
                'station' => 'East Station',
                'city' => 'Sylhet',
                'region' => 'Sylhet',
                'country' => 'Bangladesh'
            ],
            [
                'station' => 'West Station',
                'city' => 'Rajshahi',
                'region' => 'Rajshahi',
                'country' => 'Bangladesh'
            ],
            [
                'station' => 'South Station',
                'city' => 'Khulna',
                'region' => 'Khulna',
                'country' => 'Bangladesh'
            ],
            [
                'station' => 'Midtown Station',
                'city' => 'Barishal',
                'region' => 'Barishal',
                'country' => 'Bangladesh'
            ],
            [
                'station_name' => 'Riverside Station',
                'city' => 'Rangpur',
                'region' => 'Rangpur',
                'country' => 'Bangladesh'
            ],
            [
                'station' => 'Highland Station',
                'city' => 'Mymensingh',
                'region' => 'Mymensingh',
                'country' => 'Bangladesh'
            ],
            [
                'station' => 'Bayview Station',
                'city' => 'Cox\'s Bazar',
                'region' => 'Chittagong',
                'country' => 'Bangladesh'
            ],
            [
                'station' => 'Harbor Station',
                'city' => 'Narail',
                'region' => 'Khulna',
                'country' => 'Bangladesh'
            ],
            [
                'station' => 'Hilltop Station',
                'city' => 'Bandarban',
                'region' => 'Chittagong',
                'country' => 'Bangladesh'
            ],
            [
                'station' => 'Seaside Station',
                'city' => 'Teknaf',
                'region' => 'Chittagong',
                'country' => 'Bangladesh'
            ],
            [
                'station' => 'Forest Station',
                'city' => 'Sundarbans',
                'region' => 'Khulna',
                'country' => 'Bangladesh'
            ],
            [
                'station' => 'Mountain Station',
                'city' => 'Sylhet',
                'region' => 'Sylhet',
                'country' => 'Bangladesh'
            ],
            [
                'station' => 'Riverbank Station',
                'city' => 'Patuakhali',
                'region' => 'Barishal',
                'country' => 'Bangladesh'
            ]
        ]);
    }
}
