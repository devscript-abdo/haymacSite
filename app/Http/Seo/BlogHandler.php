<?php

namespace App\Http\Seo;

use App\Repository\Post\PostInterface;
use TCG\Voyager\Facades\Voyager;

class BlogHandler extends SeoHandler
{

    public function __construct()
    {

        $this->seo()->setTitle(setting('site.title'));
        $this->seo()->setDescription(setting('site.description'));

        $this->seo()->opengraph()->setTitle(setting('site.title'));
        $this->seo()->opengraph()->setDescription(setting('site.description'));
        $this->seo()->opengraph()->setUrl(request()->getUri());
        $this->seo()->opengraph()->setSiteName('Haymac Production BlogHandler');
        $this->seo()->opengraph()->addProperty('type', 'website');
        $this->seo()->opengraph()->addProperty('locale', 'fr_FR');
        $this->seo()->opengraph()->addImage(Voyager::image(setting('seo.facebook_og_image')), ['height' => 300, 'width' => 300]);
        // $this->seo()->twitter()->setSite('@LuizVinicius73');
        $this->seo()->jsonLd()->setType('WebPage');
    }


    public function single($post)
    {
        $data = app(PostInterface::class)->getPost($post);
        dd($data);
        $this->seo()->setTitle($attributes['title']);
        $this->seo()->setDescription($attributes['excerpt']);

        $this->seo()->opengraph()->setTitle($attributes['title']);
        $this->seo()->opengraph()->setDescription($attributes['excerpt']);
        $this->seo()->opengraph()->setUrl(request()->getUri());
        $this->seo()->opengraph()->setSiteName('Haymac Production-' . $attributes['title']);
        $this->seo()->opengraph()->addProperty('type', 'website');
        $this->seo()->opengraph()->addProperty('locale', 'fr_FR');
        $this->seo()->opengraph()->addImage(Voyager::image($attributes['image']), ['height' => 300, 'width' => 300]);
        // $this->seo()->twitter()->setSite('@LuizVinicius73');
        $this->seo()->jsonLd()->setType('WebPage');
    }
}
