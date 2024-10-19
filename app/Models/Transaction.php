<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'Transactions';
    protected $fillable = [
        'Branch',
        'BranchId',
        'FieldOfficerId',
        'FieldOfficer',
        'DepositeAmount',
        'WithdrawalAmount',
        'AccountBalance',
        'ApprovedByUsername',
        'ApprovedDate',
        'TransactionComment',
        'DailyPaymentChartNumber',
        'PageNumber',
        'AccountNumber',
        'TransactionType',
    ];
}