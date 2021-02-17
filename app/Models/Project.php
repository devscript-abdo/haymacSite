<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use TCG\Voyager\Traits\Translatable;
use TCG\Voyager\Facades\Voyager;
use App\Traits\Language;

class Project extends Model
{

    use HasFactory, Translatable, Language;

    protected $translatable = ['title', 'excerpt', 'description', 'seo_title', 'seo_description', 'seo_keywords'];


    public function categories()
    {
        return $this->belongsToMany('App\Models\Category', 'project_category', 'project_id', 'category_id');
    }

    public function category()
    {

        return $this->belongsTo('App\Models\Category')->select(['name', 'slug', 'id']);
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'project_tag', 'project_id', 'tag_id');
    }

    public function scopeActive($query)
    {
        return $query->where('active', true)->get();
    }

    public function scopeSolutions($query)
    {
        return $query->where('oursolution', true)->get();
    }

    public function scopeHome($query)
    {
        return $query->where('active', true)
            ->with(['translations', 'category'])
            ->inRandomOrder()
            ->limit(5)
            ->get();
    }

    public function getFirstPhotoAttribute()
    {
        $images =  json_decode($this->photos);
        
        return Voyager::image(array_shift($images));
    }

    /*public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }*/
}
