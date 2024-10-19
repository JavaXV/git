<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $table = 'Accounts';
    protected $fillable = [
        'Branch',
        'CustomerId',
        'Fullname',
        'FieldOfficer',
        'Product',
        'PageNo',
        'AccountNo',
        'InitialDeposite',
        'Interest',
        'NanagementFee',
        'ModeOfPayment',
        'AmountRequest',
        'MaturityDate',
        'AccountBalance',
        'CreatedBy',
    ];
}