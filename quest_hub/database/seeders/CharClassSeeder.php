<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

        $classes = ['Barbarian','Fighter','Ranger','Bard','Rogue','Cleric','Druid','Monk','Paladin','Sorcerer','Warlock','Wizard','Artificer'];
        foreach ($classes as $class) {
            DB::table('char_classes')->insert(['name' => $class]);
        }
    }
}
