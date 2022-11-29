<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobExpense extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'B2D3_job_expenses';

    protected $guarded = [];

    protected $casts = [
        'amount' => 'decimal:2',
        'billed' => 'boolean',
        'name_id' => 'int',
        'label' => 'decimal:2',
        'adjustment' => 'decimal:2',
        'pickupCharge' => 'decimal:2',
        'job_id' => 'int',
        'markUp' => 'decimal:2',

    ];


    public function inboundJob()
    {
        return $this->belongsTo(InboundJob::class, 'job_id', 'id');
    }

    public function expenseReason()
    {
        return $this->belongsTo(ExpenseReason::class, 'name_id', 'id');
    }

}
