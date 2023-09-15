<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Counter;
use App\Models\Hero;
use App\Models\Intro;
use App\Models\Service;
use App\Models\TopHeader;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $topHeader = TopHeader::orderBy('id', 'asc')->take(1)->first();
        $hero = Hero::orderBy('id', 'desc')->take(1)->first();
        $about = About::orderBy('id', 'desc')->take(1)->first();
        $intro = Intro::orderBy('id', 'desc')->take(1)->first();
        $service = Service::orderBy('id', 'desc')->take(1)->first();
        $counter = Counter::orderBy('id', 'desc')->take(1)->first();
        return view('front.index', compact('topHeader', 'hero', 'about', 'intro', 'service', 'counter'));
    }
}
