<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisplayIngredient extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'B2D3_display_ingredients';

    protected $fillable = [
        'name',
        'amount',
        'uom',
        'created_by',
        'updated_by',
    ];

    public function display()
    {
        return $this->belongsTo(Display::class);
    }
}
