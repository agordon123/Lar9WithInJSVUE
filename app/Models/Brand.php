<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'B2D3_brands';

    protected $fillable = [
        'name',
        'status',
        'created_by',
        'updated_by',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'B2D3_user_brands');
    }

    public function campaigns()
    {
        return $this->hasMany(Campaign::class, 'brand_id');
    }

    public function inbound_jobs()
    {
        return $this->hasMany(InboundJob::class, 'brand_id');
    }
}
