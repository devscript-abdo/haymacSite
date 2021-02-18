<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use Carbon\Carbon;
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

    public function getFullDateAttribute()
    {
        $date = Carbon::createFromFormat('Y-m-d H:i:s',$this->created_at);
        return "<span><i> {$date->format('d')} </i> {$date->format('F')} </span>";
    }
}
