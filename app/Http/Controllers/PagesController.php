<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function mainPage()
    {
        return view('pages.index');
    }

    public function page($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        $slg = 'page';

        return view('pages.' . $slg, [
            'page' => $page,
//            'data' => $data,
        ]);

    }

}
