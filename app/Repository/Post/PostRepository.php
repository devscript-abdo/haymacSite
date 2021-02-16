<?php

namespace App\Repository\Post;

use App\Models\Post;

class PostRepository  implements PostInterface
{

    protected $model;

    public function __construct(Post $model)
    {
        $this->model = $model;
    }


    public function query()
    {
        return $this->model->query();
    }

    public function all()
    {
        return $this->model->all();
    }

    public function getPost($slug)
    {
        return $this->model->whereSlug($slug)->whereStatus('PUBLISHED')->first();
    }

    public function activeItems()
    {
        return $this->model->active();
    }
}
