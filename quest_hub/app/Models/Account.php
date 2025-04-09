<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
{
    /** @use HasFactory<\Database\Factories\AccountFactory> */
    use HasFactory;

    protected $fillable = [
        'UserName',
        'Name',
        'Email',
        'UserPassword',
        'BirthDate',
        'City',
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
        return $this->belongsTo(Interest::class, "interest_id");
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'account_group');
    }

    public function experience()
    {
        return $this->belongsTo(Experience::class, "experience_id");
    }
}
