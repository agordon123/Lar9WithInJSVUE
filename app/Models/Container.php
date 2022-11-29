<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'B2D3_containers';


    protected $guarded = [];

    public function inbound_jobs_inbound_materials()
    {
        return $this->hasMany(InboundJobsInboundMaterial::class, 'container_id');
    }
    public function inbound_jobs_outbound_materials()
    {
        return $this->hasMany(InboundJobsOutboundMaterial::class, 'container_id');
    }
}
