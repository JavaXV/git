<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminPermissions extends Model
{
    use HasFactory;
    protected $table = 'AdminPermissions';
    protected $fillable = [
        'Branch',
        'Username',
        'Date',
        'Username',
        'Status',
        'PermittedBy',
    ];
}
