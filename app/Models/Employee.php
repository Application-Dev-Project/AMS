<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'birth_date',
        'birth_place',
        'gender',
        'employee_id',
        'company',
        'holidays',
        'leaves',
        'clients',
        'projects',
        'payslip',
        'tasks',
        'assets',
        'timing_sheets',
    ];
}
