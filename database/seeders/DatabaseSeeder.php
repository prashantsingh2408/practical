<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FacultySeeder::class);
        $this->call(FacultyTimeTableSeeder::class);
        $this->call(SubjectMasterSeeder::class);
        $this->call(TermSeeder::class);

    }
}
