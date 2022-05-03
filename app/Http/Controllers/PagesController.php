<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Mark;
use App\Models\Page;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

class PagesController extends Controller
{
    public function mainPage()
    {
        $services = Service::where('active', true)->select('id', 'slug', 'heading', 'image')->orderBy('order', 'desc')->limit(8)->get();
        $portfolios = Portfolio::with('stars')->where('active', true)->select('id', 'slug', 'heading', 'image', 'views')->orderBy('views', 'desc')->limit(6)->get();

        return view('pages.index', [
            'services' => $services,
            'portfolios' => $portfolios,
        ]);
    }

    public function page(Request $request, $slug)
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
            $data=Service::where('active', true)->select('id', 'slug', 'heading', 'teaser', 'image')->orderBy('order', 'desc')->get();
        }
        if($slug === 'portfolio') {
            $slg='portfolios';
            $tag = $request->get('tag');
            if ($tag != null) {
                $portfolio = Mark::where('slug', $tag)->first()->portfolios;
            } else {
                $portfolio = Portfolio::where('active', true)->select('id', 'slug', 'heading', 'teaser', 'image')->orderBy('order', 'desc')->get();
            }
            $data=[
                'portfolio' => $portfolio,
                'tags' => Mark::all(),
                'mark' => $tag,
            ];
        }
        if($slug === 'blog') {
            $slg='blogs';
            $data=Blog::where('active', true)->select('id', 'slug', 'heading', 'teaser', 'image', 'created_at')->get();
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
//        increment
            $page->views++;
            $page->save();
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
//        increment
        $page->views++;
        $page->save();
//        return data
        return view('pages.portfolio', [
            'page' => $page,
            'similar' => collect([$old, $new]),
        ]);

    }

    public function blog($slug) {
        $page = Blog::where('slug', $slug)->firstOrfail();
        $read_time = ceil(strlen($page->body)/1000);
//        increment
        $page->views++;
        $page->save();
//        return data
        return view('pages.blog', [
            'page' => $page,
            'read_time' => $read_time,
            'comments_count' => $page->comments()->count(),
        ]);
    }
}
