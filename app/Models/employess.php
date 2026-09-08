<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employess extends Model
{
    protected $table = 'employees';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'department',
        'salary',
        'joining_date',
        'address',
    ];

    protected $casts = [
        'joining_date' => 'date',
    ];
}
