<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Page;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    //
    public function index()
    {
        $mainpage_date = Page::orderBy('updated_at', 'DESC')->value('updated_at');
        $blog_date = Blog::where('active', 1)->orderBy('updated_at', 'DESC')->value('updated_at');
        $all = collect();
        $pages = Page::orderBy('created_at', 'DESC')->select('id', 'slug', 'updated_at')->get();
        $services = Service::orderBy('created_at', 'DESC')->select('id', 'slug', 'updated_at')->get();
        $portfolios = Portfolio::orderBy('created_at', 'DESC')->select('id', 'slug', 'updated_at')->get();
        $blogs = Blog::orderBy('created_at', 'DESC')->select('id', 'slug', 'updated_at')->get();


        return response()->view('sitemap', [
            'pages' => $all->merge($services)->merge($pages),
            'mainpage_date' => $mainpage_date,
            'blog_date' => $blog_date,
            'portfolios' => $portfolios,
            'blogs' => $blogs,

        ])->header('Content-Type', 'text/xml');
    }

    public function visual() {
        $services = Service::where('active', true)->orderBy('order', 'DESC')->select('id', 'slug', 'updated_at', 'heading')->get();
        $portfolios = Portfolio::where('active', true)->orderBy('order', 'DESC')->select('id', 'slug', 'updated_at', 'heading')->get();
        $blogs = Blog::where('active', true)->orderBy('created_at')->select('id', 'slug', 'updated_at', 'heading')->get();

        return view('pages.sitemap', [
            'services' => $services,
            'portfolios' => $portfolios,
            'blogs' => $blogs,
        ]);

    }
}
