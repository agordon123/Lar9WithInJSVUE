<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'Recycling_Employees';

    protected $guarded = [];

    protected $casts = [
        'rate' => 'decimal:2',
        'status' => 'boolean',
    ];

    public function punches(){
        return $this->hasMany(Punch::class, 'employee_id');
    }
}
