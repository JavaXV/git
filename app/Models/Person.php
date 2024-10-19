<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $table = 'Person';
    protected $fillable = [
        'Branch',
        'CustomerId',
        'Fullname',
        'FieldOfficer',
        'Email',
        'Gender',
        'Job',
        'Country',
        'HomeAddress',
        'NearestBusStop',
        'MaritalStatus',
        'DateOfBirth',
        'SMSAlert',
        'State',
        'AccountNo',
        'NextOfKin',
        'NextOfKinAddress',
        'NextOfKinPhone',
        'CreatedBy',
    ];
}

