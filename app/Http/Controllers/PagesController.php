<?php

namespace App\Http\Controllers;

use App\Models\Page;
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
//        dynamic pages
        if($slug === 'services') {
            $slg='services';
            $data=Page::where('id', '<', 4)->get();
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

}