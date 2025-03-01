<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'UserName',
        'Name',
        'Email',
        'UserPassword',
        'BirthDate',
        'City',
        'InterestID',
        'ExperienceID',
        'Phone',
        'Description',
        'TimeUsed',
        'ProfilePicture',
    ];

    protected $hidden = [
        'UserPassword',
    ];

    public function interest()
    {
        return $this->belongsTo(Interest::class, 'InterestID');
    }

    public function experience()
    {
        return $this->belongsTo(Experience::class, 'ExperienceID');
    }
}
