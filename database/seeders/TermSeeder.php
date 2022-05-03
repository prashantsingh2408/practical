<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('terms')->delete();

        $array = [
            ['1' => 'Term 1'],
            ['2' => 'Term 2'],
            ['3' => 'Term 3'],
            ['4' => 'Term 4'],
            ['5' => 'Term 5'],
        ];
        $json = json_encode($array);
        \DB::table('terms')->insert([
            [
                'name' => $json,
            ]
        ]);
    }
}
