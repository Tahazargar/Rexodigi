<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Counter;
use App\Models\Faq;
use App\Models\Footer;
use App\Models\FooterAnyQuestion;
use App\Models\FooterQuick;
use App\Models\FooterService;
use App\Models\Header;
use App\Models\Hero;
use App\Models\Intro;
use App\Models\Project;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\TopHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $team = Team::orderBy('id', 'desc')->take(1)->first();
        $projects = Project::paginate(6);
        $testimonials = Testimonial::paginate(3);
        $blogs = Blog::orderBy('id', 'desc')->take(3)->get();
        $faq = Faq::all()->last();
        $footer = Footer::all()->last();
        $footerServices = FooterService::orderBy('id', 'desc')->paginate(3);
        $footerQuick = FooterQuick::all()->last();
        $footerAnyQuestion = FooterAnyQuestion::all()->last();
        $header = Header::orderBy('id', 'asc')->get();
        return view('front.index', compact('topHeader', 'hero', 'about', 'intro', 'service', 'counter', 'team', 'projects', 'testimonials', 'blogs', 'faq', 'footer', 'footerServices', 'footerQuick', 'footerAnyQuestion', 'header'));
    }

    public function contact(Request $request)
    {
        Contact::create([
           'full_name' => $request->fullName,
            'email' => $request->email,
            'subject' => $request->subject,
            'description' => $request->description
        ]);
        return 1;
    }

    public function comment(Request $request)
    {
        Comment::create([
            'description' => $request->description,
            'user_id' => Auth::user()->id,
            'blog_id' => $request->blog_id,
            'parent_id' => $request->commentReply
        ]);
        return 1;
    }

    public function blog()
    {
        $blogs = Blog::orderBy('id', 'desc')->paginate(4);
        $latestProjects = Project::orderBy('id', 'desc')->take(3)->get();
        $topHeader = TopHeader::orderBy('id', 'asc')->take(1)->first();
        $header = Header::paginate(5);
        $footer = Footer::all()->last();
        $footerServices = FooterService::orderBy('id', 'desc')->paginate(3);
        $footerQuick = FooterQuick::all()->last();
        $footerAnyQuestion = FooterAnyQuestion::all()->last();

        return view('front.partials.blog.blog', compact('topHeader', 'header', 'footer', 'footerServices', 'footerQuick', 'footerAnyQuestion', 'blogs', 'latestProjects'));
    }

    public function blogDetail($id)
    {
        $blog = Blog::findOrFail($id);
        $topHeader = TopHeader::orderBy('id', 'asc')->take(1)->first();
        $header = Header::paginate(5);
        $footer = Footer::all()->last();
        $footerServices = FooterService::orderBy('id', 'desc')->paginate(3);
        $footerQuick = FooterQuick::all()->last();
        $footerAnyQuestion = FooterAnyQuestion::all()->last();
        $latestProjects = Project::orderBy('id', 'desc')->take(3)->get();
        $comments = Comment::with('childs')->where('blog_id', $id)->where('status', 1)->whereNull('parent_id')->get();
        return view('front.partials.blog.blog-detail', compact('blog', 'comments' ,'topHeader', 'header', 'footer', 'footerServices', 'footerQuick', 'footerAnyQuestion', 'latestProjects'));
    }
}
