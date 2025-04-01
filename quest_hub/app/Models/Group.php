<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    /** @use HasFactory<\Database\Factories\GroupFactory> */
    use HasFactory;
    protected $fillable = [
        'groupName',
        'description',
        'userid',
        'charid',
    ];

    public function user()
    {
        return $this->hasMany(UserAccount::class, 'userid');
    }

    public function character()
    {
        return $this->hasMany(Character::class, 'charid');
    }
}
