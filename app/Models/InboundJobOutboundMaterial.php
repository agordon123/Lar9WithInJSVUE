<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InboundJobOutboundMaterial extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'Recycling_Outbound';

    const UPDATED_AT = null;
    const CREATED_AT = 'timestamp';

    protected $guarded = [];

    protected $casts = [
        'weight' => 'float',
        // 'date_entered' => 'date',
        'ToStock' => 'boolean',
        'Active' => 'boolean',
        'billed' => 'boolean',
        'container_id' => 'int',
        'job_id' => 'int',
        'content_id' => 'int',
    ];

    public function inboundJob()
    {
        return $this->belongsTo(InboundJob::class, 'job_id', 'id');
    }
    public function conatiner()
    {
        return $this->belongsTo(Container::class, 'container_id', 'id');
    }
    public function material()
    {
        return $this->belongsTo(Material::class, 'content_id', 'id');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
