<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Modules\Article\Entities\Post;
use Modules\Page\Entities\Page;
use Modules\Service\Entities\Service;

class FrontendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $body_class = '';
        $blogs = Post::latest()->with(['category', 'tags', 'comments'])->take(3)->get();
        $insurancePlans = Service::where('product_category_id', 1)
            ->where('status', 1)
            ->where('is_featured', 1)
            ->orderBy('order', 'asc')
            ->take(6)
            ->get();
        $suplementaryPlans = Service::where('product_category_id', 2)
            ->where('status', 1)
            ->where('is_featured', 1)
            ->orderBy('order', 'asc')
            ->take(6)
            ->get();
        return view('frontend.index', compact('body_class', 'blogs', 'insurancePlans', 'suplementaryPlans'));
    }

    /**
     * Privacy Policy Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function privacy()
    {
        $body_class = '';

        return view('frontend.privacy', compact('body_class'));
    }

    /**
     * Terms & Conditions Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function terms()
    {
        $body_class = '';

        return view('frontend.terms', compact('body_class'));
    }

    //Tushar

    /**
     * Blog Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function blogs()
    {
        $body_class = '';

        return view('frontend.blog', compact('body_class'));
    }
    /**
     * Contacts Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        $body_class = '';

        return view('frontend.contact', compact('body_class'));
    }


    /**
     * Page view
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function getPage($slug) {
        $meta_page_type = 'page';
        //redirect to static page
        if ($slug == 'premium-calculator') {
            return view('frontend.premium-calculator', compact('meta_page_type'));
        }
        $content = Page::where('slug', $slug)->firstOrFail();
        if ($slug == 'about-alpha') {
            return view('frontend.page-about', compact('content', 'meta_page_type'));
        }
        return view('frontend.page', compact('content', 'meta_page_type'));
    }
}

