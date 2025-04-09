<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharRaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $races = ['Human','Dwarf','Elf','Halfling','Dragornborn','Gnome','Orc','Tiefling','Goliath','Aasimar'];
        foreach ($races as $race) {
            DB::table('char_races')->insert(['name' => $race]);
        }
    }
}
