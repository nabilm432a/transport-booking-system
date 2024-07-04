<?php

namespace Database\Seeders;

use App\Models\Record;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            RouteSeeder::class,
            NoticeSeeder::class,
            RecordSeeder::class,
            LocationSeeder::class,
            TransportSeeder::class
        ]);
    }
}
