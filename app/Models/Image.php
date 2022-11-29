<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /*
              THE TABLE B2D3_images contains the images and documents path

              Include PDf's and Images
    */
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'B2D3_images';

    protected $guarded = [];

    public function imageable()
    {
        return $this->morphTo();
    }
}
