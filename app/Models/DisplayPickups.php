<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisplayPickups extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'B2D3_display_pickups';

    protected $guarded = [];

    public function display()
    {
        return $this->belongsTo(Display::class);
    }
}
