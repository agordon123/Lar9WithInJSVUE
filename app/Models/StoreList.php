<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreList extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'B2D3_store_list';
    protected $guarded = [];
    protected $casts = [
        'store_number' => 'int',
        'store_group_id' => 'int'

    ];
    public function store_group()
    {
        return $this->belongsTo(StoreGroup::class, 'store_group_id', 'id');
    }
}
