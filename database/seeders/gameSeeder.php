<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class gameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('gamestable')->insert([
            'gameImagePath' => '/kees',
            'firstname' => 'Rolf',
            'surname' => 'breda',
            'email' => 'rolf@bredagames-demo.nl',
            'phone' => '06 31 123456',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet'
        ]);
    }
}
