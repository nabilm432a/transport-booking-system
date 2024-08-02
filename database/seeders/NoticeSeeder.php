<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notices')->insert(
        [
            [
               'heading' => 'Welcome to Transport',
               'body' => 'We hope you have a wonderful browsing experience'
            ],
            [
               'heading' => 'Project Progress',
               'body' => 'Hello, this project is still under progress, several features will be missing'
            ]

        ]);
    }
}
