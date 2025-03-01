<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'groupName',
        'description',
        'userid',
        'charid',
    ];

    public function user()
    {
        return $this->belongsTo(UserAccount::class, 'userid');
    }

    public function character()
    {
        return $this->belongsTo(Character::class, 'charid');
    }
}
