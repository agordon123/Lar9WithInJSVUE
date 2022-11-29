<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'B2D3_campaigns';

    protected $fillable = [
        'name',
        'brand_id',
        'status',
        'created_by',
        'updated_by',

    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function displays()
    {
        return $this->hasMany(Display::class, 'campaign_id');
    }
}
