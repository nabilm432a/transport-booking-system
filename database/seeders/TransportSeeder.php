<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transports')->insert(
        [
            [
                'license' => 'BD-1234',
                'seats' => 50,
                'type' => 'bus'
            ],
            [
                'license' => 'BD-5678',
                'seats' => 50,
                'type' => 'bus'
            ],
            [
                'license' => 'BD-9101',
                'seats' => 40,
                'type' => 'bus'
            ],
            [
                'license' => 'PL-2020',
                'seats' => 180,
                'type' => 'plane'
            ],
            [
                'license' => 'PL-3030',
                'seats' => 200,
                'type' => 'plane'
            ],
            [
                'license' => 'PL-4040',
                'seats' => 220,
                'type' => 'plane'
            ],
            [
                'license' => 'TR-1010',
                'seats' => 300,
                'type' => 'train'
            ],
            [
                'license' => 'TR-2020',
                'seats' => 350,
                'type' => 'train'
            ],
            [
                'license' => 'TR-3030',
                'seats' => 400,
                'type' => 'train'
            ],
            [
                'license' => 'BD-1122',
                'seats' => 55,
                'type' => 'bus'
            ],
            [
                'license' => 'PL-5050',
                'seats' => 250,
                'type' => 'plane'
            ],
            [
                'license' => 'TR-4040',
                'seats' => 450,
                'type' => 'train'
            ]
        ]);
    }
}
