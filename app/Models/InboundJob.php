<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class InboundJob extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'Recycling_Joblist';

    const UPDATED_AT = null;
    const CREATED_AT = 'timestamp';

    protected $guarded = ['id'];

    protected $casts = [
        // 'StartDate' => 'date',
        // 'EndDate' => 'date',
        'Closed' => 'boolean',
        'Active' => 'boolean',
        'turnOffTimeLine' => 'boolean',
        'id' => 'int',
        'archived' => 'int',
        'store_group_id'=>'int',
        'direction'=>'int',
        'project'=>'int',
        'accesories'=>'int',
        'price' => 'float',
    ];

     public function brand()
    {
         return $this->belongsTo(Brand::class);
     }
    public function inventory()
    {
        return $this->hasMany(Inventory::class, 'job_id');
    }
    public function inbound_materials()
    {
        return $this->hasMany(InboundJobsInboundMaterial::class, 'job_id');
    }

    public function outbound_materials()
    {
        return $this->hasMany(InboundJobsOutboundMaterial::class, 'job_id');
    }

    public function expenses()
    {
        return $this->hasMany(JobExpense::class, 'job_id');
    }

    public function punches()
    {
        return $this->hasMany(Punch::class, 'job_id');
    }

    public function compliances()
    {
        return $this->hasMany(Compliance::class, 'job_id');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
    public function scopeBrands($query,array $filters)
    {
        $query->when($filters['brand'] ?? false, fn($query,$search)=>
        $query->where('brand','like','%' . $search . '%' ));
    }
}
