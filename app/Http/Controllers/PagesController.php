<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Page;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

class PagesController extends Controller
{
    public function mainPage()
    {
        $services = Service::all();

        return view('pages.index', [
            'services' => $services
        ]);
    }

    public function page($slug)
    {
//        declarative
        $page='';
        $slg='';
        $data='';
//        static pages
        ($slug === 'contacts') ? $slg='contacts' : '';
        ($slug === 'products') ? $slg='products' : '';
        ($slug === 'collaborate') ? $slg='collaborate' : '';
//        dynamic pages
        if($slug === 'services') {
            $slg='services';
            $data=Service::all();
        }
        if($slug === 'portfolio') {
            $slg='portfolios';
            $data=Portfolio::all();
        }
        if($slug === 'blog') {
            $slg='blogs';
            $data=Blog::all();
        }
        if($slug === 'collaborate') {
            $slg='collaborate';
            $page=Page::where('slug', 'collaborate')->first();
        }
//        get models pages
        if(!$slg){
            $page = Page::where('slug', $slug)->first();
            $slg = 'page';
            if ($page == null) {
                $page = Service::where('slug', $slug)->firstOrFail();
                $slg = 'service';
            }
        }
//        return data
        return view('pages.' . $slg, [
            'page' => $page,
            'data' => $data,
        ]);

    }

    public function portfolio($slug) {
        $page = Portfolio::where('slug', $slug)->firstOrfail();
        $new = Portfolio::where('id', '>', $page->id)->first();
        if (!$new) {
            $new = Portfolio::orderBy('id')->first();
        }
        $old = Portfolio::where('id', '<', $page->id)->orderBy('id', 'desc')->first();
        if (!$old) {
            $old = Portfolio::orderBy('id', 'desc')->first();
        }
        return view('pages.portfolio', [
            'page' => $page,
            'similar' => collect([$old, $new]),
        ]);

    }

    public function blog($slug) {
        $page = Blog::where('slug', $slug)->firstOrfail();
        return view('pages.blog', [
            'page' => $page,
        ]);

    }

}
