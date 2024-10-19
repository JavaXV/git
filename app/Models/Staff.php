<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table = 'Staff';
    protected $fillable = [
        'Branch',
        'Fullname',
        'ids',
        'Username',
        'Phoneno',
        'Gender',
        'passwword',
        'Token',
        'CreatedBy',
    ];
}
