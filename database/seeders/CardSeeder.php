<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Card::firstOrCreate([
            'name' => '50 Points'
        ],[
            'points' => 50
        ]);

        Card::firstOrCreate([
            'name' => '100 Points'
        ],[
            'points' => 100
        ]);

        Card::firstOrCreate([
            'name' => '150 Points'
        ],[
            'points' => 150
        ]);
    }
}
