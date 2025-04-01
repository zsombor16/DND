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
        'faj',
        'CharacterLevel',
        'PlayerName',
        'CharacteDetailPDF',
        'userID',
    ];

    public function user()
    {
        return $this->belongsTo(UserAccount::class, 'userID');
    }

    public function adventure()
    {
        return $this->belongsTo(Adventure::class, 'adventureid');
    }


}
