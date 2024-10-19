<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Smsalert extends Model
{
    use HasFactory;
    protected $table = 'Smsalerts';
    protected $fillable = [
        'id',
        'AccountNumber',
        'AccountType',
        'SmsAlertCount',
        'PhoneNo',
        'All',
        'PostedBy',
    ];
}
