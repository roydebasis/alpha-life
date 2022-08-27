<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Modules\Article\Entities\Post;
use Modules\Claim\Entities\Claim;
use Modules\Home\Entities\About;
use Modules\Home\Entities\Quote;
use Modules\Home\Entities\Slider;
use Modules\Notice\Entities\Notice;
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
            ->get();

        $sliders = Slider::all();

        $quotes = Quote::all();

        $aboutAlpha = About::first();

        return view('frontend.index', compact('body_class', 'blogs', 'insurancePlans', 'suplementaryPlans', 'sliders', 'quotes', 'aboutAlpha'));
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
        if ($slug == 'profile') {
            if(!auth()->check()) return redirect('/');
            $content = Page::where('slug', $slug)->first();
            return view('frontend.page-profile', compact('content', 'meta_page_type'));
        }
        //redirect to static page
        if ($slug == 'premium-calculator') {
            return view('frontend.premium-calculator', compact('meta_page_type'));
        }
        $content = Page::where('slug', $slug)->firstOrFail();
        if ($slug == 'about-alpha') {
            $aboutAlpha = About::first();
            return view('frontend.page-about', compact('content', 'meta_page_type', 'aboutAlpha'));
        }
        elseif ($slug == 'notice-board') {
            $notices = Notice::orderBy('order', 'desc')->get();
            return view('frontend.page-notice-board', compact('content', 'meta_page_type', 'notices'));
        }
        elseif ($slug == 'claim-information') {
            $paid_claims = Claim::where('claim_status', '1')->orderBy('order', 'desc')->get();
            $pending_claims = Claim::where('claim_status', '2')->orderBy('order', 'desc')->get();
            return view('frontend.page-claim', compact('content', 'meta_page_type', 'paid_claims', 'pending_claims'));
        }
        elseif ($slug == 'business-development') {
            return view('frontend.page-business-development', compact('content', 'meta_page_type'));
        }
        elseif ($slug == 'hospital-network') {
            return view('frontend.page-hospital-network', compact('content', 'meta_page_type'));
        }

        return view('frontend.page', compact('content', 'meta_page_type'));
    }

    public function getNoticeDownload(Request $request)
    {
        $fileURL = $request->query('attachment');

        if (isset($fileURL)) {
            //PDF file is stored under project/public/download/info.pdf
            $file= public_path(). $fileURL;

            $headers = array(
                    'Content-Type: application/pdf',
                    );

            return response()->download($file, 'notice.pdf', $headers);
        }


        return back();
    }

    public function premiumCollectionDetails(Request $request, $employeeCode) {
        return view('frontend.users.premium-collection-details', compact('employeeCode'));
    }

    public function rankings(Request $request) {
        $empProfile =  getEmpProfile();
        return view('frontend.users.ranking', compact('empProfile'));
    }

    public function earnings(Request $request) {
        $empProfile =  getEmpProfile();
        return view('frontend.users.earnings', compact('empProfile'));
    }

    public function persistency(Request $request) {
        $empProfile =  getEmpProfile();
        return view('frontend.users.persistency', compact('empProfile'));
    }

    public function persistencyPolicy(Request $request, $selectedEmployeeId) {
        $params = [
            'employee_id' => $request->employee_id,
            'selected_designation_key' => $request->selected_designation_key,
            'login_designation_key' => $request->login_designation_key,
            'selected_employee_id' => $selectedEmployeeId,
            'type' => $request->type
        ];
        return view('frontend.users.persistency-policy-list', compact('params'));
    }
}

