<?php

namespace App\Http\Controllers;

use App\Repository\Client\ClientInterface;
use App\Repository\Page\PageInterface;
use App\Repository\Post\PostInterface;
use App\Repository\Project\ProjectInterface;
use App\Repository\Service\ServiceInterface;
use App\Repository\Slider\SliderInterface;
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
        
        return view('dark.pages.about.index', compact('testimonials', 'services','teams'));
    }

    public function services()
    {

        $services = app(ServiceInterface::class)->activeItems();

        return view('dark.pages.services.index', compact('services'));
    }

    public function portfolio()
    {
        return view('dark.pages.portfolio.index');
    }
    public function singlePortfolio()
    {

        return view('dark.pages.portfolio.single.index');
    }

    public function blog()
    {

        return view('dark.pages.blog.index');
    }

    public function singleBlog()
    {
        return view('dark.pages.blog.single.index');
    }
}
