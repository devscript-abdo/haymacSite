<?php

namespace App\Repository\Post;

use App\Models\Post;

use Illuminate\Cache\CacheManager;

class PostRepositoryCache  implements PostInterface
{

    protected $model;

    protected $cache;

    const TTL = 1440; // TTL(Time To Live) 1440 = 1day

    public function __construct(Post $model, CacheManager $cache)
    {
        $this->cache = $cache;

        $this->model = $model;
    }


    public function query()
    {
        return $this->model->query();
    }

    public function all()
    {
        return $this->cache->remember('posts_cache', self::TTL, function () {
            return $this->model->all();
        });
    }

    public function getPost($slug, $with = [])
    {
        return $this->cache->remember('post_cache' . $slug, self::TTL, function () use ($slug, $with) {

            if (isset($with) && is_array($with)) {
                return $this->model->whereSlug($slug)->whereStatus('PUBLISHED')
                    ->with($with)
                    ->firstOrFail();
            }
            return $this->model->whereSlug($slug)->whereStatus('PUBLISHED')->first();
        });
    }

    public function activeItems()
    {
        return $this->cache->remember('posts_cache', self::TTL, function () {
            return $this->model->active();
        });
    }

    public function activePaginated()
    {
        return $this->cache->remember('posts_cache_paginated', self::TTL, function () {
            return $this->model->getPaginated();
        });
    }
}
