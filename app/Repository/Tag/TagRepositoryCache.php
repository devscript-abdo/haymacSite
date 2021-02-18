<?php

namespace App\Repository\Tag;

use App\Models\Tag;

use Illuminate\Cache\CacheManager;

class TagRepositoryCache  implements TagInterface
{

    protected $model;

    protected $cache;

    const TTL = 1440; // TTL(Time To Live) 1440 = 1day

    public function __construct(Tag $model, CacheManager $cache)
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
        return $this->cache->remember('tags_cache', self::TTL, function () {
            return $this->model->all();
        });
    }

    public function activeItems()
    {
        return $this->cache->remember('tags_cache', self::TTL, function () {
            return $this->model->active();
        });
    }
    public function getTag($slug)
    {
        return $this->cache->remember('tag_cache' . $slug, self::TTL, function () use ($slug) {
            return $this->model->whereSlug($slug)->whereActive(true)->first();
        });
    }
}
