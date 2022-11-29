<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseReason extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'B2D3_expenseReason';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'expense_status',
        'created_by',
        'updated_by',
        'type_of_cost',
    ];
    protected $casts = [
        // 'StartDate' => 'date',
        // 'EndDate' => 'date',
        'id' => 'int',
        'updated_by' => 'int',
    ];

    public function jobExpense()
    {
        return $this->hasMany(JobExpense::class, 'name_id');
    }
    /*
    public function inbound_jobs()
    {
        return $this->hasMany(InboundJob::class, 'brand_id');
    }*/
}
