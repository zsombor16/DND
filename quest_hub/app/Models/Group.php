<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    /** @use HasFactory<\Database\Factories\GroupFactory> */
    use HasFactory;
    protected $fillable = [
        'group_name',
        'description',
    ];

    public function user()
    {
        return $this->hasMany(UserAccount::class, );
    }

    public function accounts()
    {
        return $this->belongsToMany(Account::class, 'account_group');
    }

    public function character()
    {
        return $this->hasMany(Character::class, );
    }
}
