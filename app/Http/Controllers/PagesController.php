<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Faq;
use App\Models\Mark;
use App\Models\Page;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Tag;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

class PagesController extends Controller
{
    public function mainPage()
    {
        $services = Service::where('active', true)->select('id', 'slug', 'heading', 'image', 'svg')->orderBy('order', 'desc')->limit(8)->get();
        $portfolios = Portfolio::with('stars')->where('active', true)->select('id', 'slug', 'heading', 'image', 'views')->orderBy('views', 'desc')->limit(6)->get();
        $faqs = Faq::where('active', true)->select('id', 'ask', 'answer')->orderBy('order', 'desc')->limit(6)->get();
        $date = Blog::orderBy('created_at', 'DESC')->value('created_at');

        return view('pages.index', [
            'services' => $services,
            'portfolios' => $portfolios,
            'faqs' => $faqs,
            'date' => $date,
        ]);
    }

    public function page(Request $request, $slug)
    {
//        declarative
        $page='';
        $slg='';
        $data='';
        $date='05.05.2022';

//        static pages
        ($slug === 'contacts') ? $slg='contacts' : '';
        ($slug === 'products') ? $slg='products' : '';
        ($slug === 'collaborate') ? $slg='collaborate' : '';
//        dynamic pages
        if($slug === 'services') {
            $slg = 'services';
            $data = Service::with('stars')->where('active', true)->select('id', 'slug', 'heading', 'teaser', 'image', 'svg')->orderBy('order', 'desc')->get();
            $date = Service::orderBy('created_at', 'DESC')->value('created_at');
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
            $date = Portfolio::orderBy('created_at', 'DESC')->value('created_at');
        }
        if($slug === 'blog') {
            $slg='blogs';
            $tag = $request->get('tag');
            if ($tag != null) {
                $blogs = Tag::where('slug', $tag)->first()->blogs;
            } else {
                $blogs = Blog::with('stars')->where('active', true)->select('id', 'slug', 'heading', 'teaser', 'image', 'created_at', 'youtube', 'views')->orderBy('created_at', 'DESC')->get();
            }
            $data=[
                'blogs' => $blogs,
                'tags' => Tag::all(),
                'mark' => $tag,
            ];
            $date = Blog::orderBy('created_at', 'DESC')->value('created_at');
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
                $page = Service::with('stars')->where('slug', $slug)->firstOrFail();
                $slg = 'service';
                $rating = $page->stars;
            }
//        increment
            $page->views++;
            $page->saveQuietly();
        }
//        return data
        return view('pages.' . $slg, [
            'page' => $page,
            'data' => $data,
            'date' => $date,
            'rating' => $rating ?? (object)['rating' => 5, 'count' => 1],
        ]);

    }

    public function portfolio($slug) {
        $page = Portfolio::with('stars')->where('slug', $slug)->firstOrfail();
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
        $page->saveQuietly();
//        return data
        return view('pages.portfolio', [
            'page' => $page,
            'similar' => collect([$old, $new]),
            'rating' => $page->stars ?? (object)['rating' => 5, 'count' => 1],
        ]);

    }

    public function blog($slug) {
        $page = Blog::with('stars')->where('slug', $slug)->firstOrfail();
        $read_time = ceil(strlen($page->body)/1000);
//        increment
        $page->views++;
        $page->saveQuietly();
//        return data
        return view('pages.blog', [
            'page' => $page,
            'read_time' => $read_time,
            'comments_count' => $page->comments()->count(),
            'rating' => $page->stars ?? (object)['rating' => 5, 'count' => 1],
        ]);
    }
}
