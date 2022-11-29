<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Punch extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'Recycling_Punches';

    protected $guarded = [];


    const UPDATED_AT = null;
    const CREATED_AT = 'timestamp';

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
    public function job()
    {
        return $this->belongsTo(InboundJob::class, 'job_id');
    }
}
