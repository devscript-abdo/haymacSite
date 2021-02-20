<?php

namespace App\Http\Controllers;

use App\Traits\InterfaceHandler;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    use InterfaceHandler;

    public function index()
    {

        $sliders  = $this->getModel('Slider')->activeItems();

        $services = $this->getModel('Service')->homeItems();

        $projects = $this->getModel('Project')->homeItems();

        $clients  = $this->getModel('Client')->activeItems();

        $testimonials = $this->getModel('Testimonial')->activeItems();

        $posts = $this->getModel('Post')->activeItems();

        return view('dark.pages.home.index', compact('sliders', 'services', 'projects', 'clients', 'testimonials', 'posts'));
    }

    public function about()
    {
        $testimonials = $this->getModel('Testimonial')->activeItems();

        $services = $this->getModel('Service')->homeItems();

        $teams = $this->getModel('Team')->activeItems();

        $clients  = $this->getModel('Client')->activeItems();

        return view('dark.pages.about.index', compact('testimonials', 'services', 'teams', 'clients'));
    }

    public function services()
    {

        $services = $this->getModel('Service')->activeItems();

        return view('dark.pages.services.index', compact('services'));
    }

    public function portfolio()
    {
        $projects = $this->getModel('Project')->activeItems();

        return view('dark.pages.portfolio.index', compact('projects'));
    }
    public function singlePortfolio($project)
    {

        $project = $this->getModel('Project')->getProject($project);

        return view('dark.pages.portfolio.single.index', compact('project'));
    }

    public function blog()
    {
        $posts = $this->getModel('Post')->activePaginated();

        return view('dark.pages.blog.index', compact('posts'));
    }

    public function singleBlog($post)
    {
        $post = $this->getModel('Post')->getPost($post, ['comments', 'tags']);

        return view('dark.pages.blog.single.index', compact('post'));
    }

    public function tags()
    {
        $tags = $this->getModel('Tag')->activeItems();

        return view('dark.pages.tags.index', compact('tags'));
    }
}
