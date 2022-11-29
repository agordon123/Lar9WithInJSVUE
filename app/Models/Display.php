<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Display extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'B2D3_displays';

    // protected $fillable = [
    //     'name',
    //     'status',
    //     'created_by',
    //     'updated_by',
    // ];

    protected $guarded = [];

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    public function displayIngredients()
    {
        return $this->hasMany(DisplayIngredient::class, 'display_id');
    }

    public function displayPickups()
    {
        return $this->hasMany(DisplayPickup::class, 'display_id');
    }
}
