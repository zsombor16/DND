<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharSheet extends Model
{
    /** @use HasFactory<\Database\Factories\CharSheetFactory> */
    use HasFactory;

    
    protected $fillable = [
        'Strength',
        'Dexterity',
        'Constitution',
        'Intelligence',
        'Wisdom',
        'Charisma',
        'Proficiency',
        'Walkingspeed',
        'Initiative',
        'Armorclass',
        'Maxhealth',
        'Currenthealth',
        'character_id'
    ];


    public function character()
    {
        return $this->belongsTo(Character::class,"character_id");
    }
}
