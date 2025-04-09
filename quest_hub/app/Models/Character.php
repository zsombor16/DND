<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    /** @use HasFactory<\Database\Factories\CharacterFactory> */
    use HasFactory;
    
    protected $fillable = [
        'name',
        'class',
        'race',
        'CharacterLevel',
        'PlayerName',
        'userID',
    ];

    public function user()
    {
        return $this->belongsTo(Account::class,"account_id");
    }

    public function adventure()
    {
        return $this->belongsTo(Adventure::class);
    }

    public function charsheet()
    {
        return $this->belongsTo(CharSheet::class,"sheet_id");
    }


}
