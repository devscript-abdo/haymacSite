<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;

class Post extends Model
{
    use HasFactory;


    public function scopeActive($query)
    {
        return $query->whereStatus('PUBLISHED')->get();
    }

    public function getPhotoAttribute()
    {
        $image  = Voyager::image($this->image);
        return $image;
    }
}
