<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adventure extends Model
{
    use HasFactory;

    protected $fillable = [
        'UserID',
        'Name',
        'Complexity',
        'Description',
        'Pictures',
        'Assets',
        'DeatilPDF',
    ];

    public function user()
    {
        return $this->belongsTo(UserAccount::class, 'UserID');
    }
}
