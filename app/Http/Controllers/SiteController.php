<?php

namespace App\Http\Controllers;

use App\Repository\Client\ClientInterface;
use App\Repository\Page\PageInterface;
use App\Repository\Post\PostInterface;
use App\Repository\Project\ProjectInterface;
use App\Repository\Service\ServiceInterface;
use App\Repository\Slider\SliderInterface;
use App\Repository\Tag\TagInterface;
use App\Repository\Team\TeamInterface;
use App\Repository\Testimonial\TestimonialInterface;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index()
    {

        $sliders  = app(SliderInterface::class)->activeItems();

        $services = app(ServiceInterface::class)->homeItems();

        $projects = app(ProjectInterface::class)->homeItems();

        $clients  = app(ClientInterface::class)->activeItems();

        $testimonials = app(TestimonialInterface::class)->activeItems();

        $posts = app(PostInterface::class)->activeItems();

        return view('dark.pages.home.index', compact('sliders', 'services', 'projects', 'clients', 'testimonials', 'posts'));
    }

    public function about()
    {
        $testimonials = app(TestimonialInterface::class)->activeItems();

        $services = app(ServiceInterface::class)->homeItems();

        $teams = app(TeamInterface::class)->activeItems();

        $clients  = app(ClientInterface::class)->activeItems();

        return view('dark.pages.about.index', compact('testimonials', 'services', 'teams', 'clients'));
    }

    public function services()
    {

        $services = app(ServiceInterface::class)->activeItems();

        return view('dark.pages.services.index', compact('services'));
    }

    public function portfolio()
    {
        $projects = app(ProjectInterface::class)->activeItems();

        return view('dark.pages.portfolio.index', compact('projects'));
    }
    public function singlePortfolio($project)
    {

        $project = app(ProjectInterface::class)->getProject($project);

        return view('dark.pages.portfolio.single.index', compact('project'));
    }

    public function blog()
    {
        $posts = app(PostInterface::class)->activePaginated();

        return view('dark.pages.blog.index', compact('posts'));
    }

    public function singleBlog($post)
    {
        $post = app(PostInterface::class)->getPost($post);

        return view('dark.pages.blog.single.index', compact('post'));
    }

    public function tags()
    {
        $tags = app(TagInterface::class)->activeItems();

        return view('dark.pages.tags.index', compact('tags'));
    }
}
