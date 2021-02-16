<?php

namespace App\Http\Controllers;

use App\Repository\Page\PageInterface;
use App\Repository\Service\ServiceInterface;
use App\Repository\Slider\SliderInterface;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index()
    {
        // $sliders = $this->slider->activeItems();
        $sliders = app(SliderInterface::class)->activeItems();
        // $about = $this->page->getPage('a-propos-de-nous');

        return view('dark.pages.home.index', compact('sliders'));
    }

    public function about()
    {

        return view('dark.pages.about.index');
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
