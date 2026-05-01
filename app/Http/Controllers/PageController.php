<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Post;
use App\Models\SeoMeta;
use Illuminate\Http\Request;
use App\Services\ReceptiveContact;

class PageController extends Controller
{
    public function __construct(protected ReceptiveContact $receptiveContact)
    {
        //
    }
    public function home()
    {
        $seoMeta = SeoMeta::where('page_name', 'home')->first();
        $latestPosts = Post::where('status', true)->latest('published_at')->take(3)->get();
        return view('pages.home', compact('latestPosts', 'seoMeta'));
    }

    public function about()
    {
        $seoMeta = SeoMeta::where('page_name', 'about')->first();
        return view('pages.about', compact('seoMeta'));
    }

    public function services()
    {
        $seoMeta = SeoMeta::where('page_name', 'services')->first();
        return view('pages.services', compact('seoMeta'));
    }

    public function residentialProjects()
    {
        $seoMeta = SeoMeta::where('page_name', 'residential-projects')->first();
        return view('pages.residential-projects', compact('seoMeta'));
    }

    public function commercialProjects()
    {
        $seoMeta = SeoMeta::where('page_name', 'commercial-projects')->first();
        return view('pages.commercial-projects', compact('seoMeta'));
    }

    public function interiorDesign()
    {
        $seoMeta = SeoMeta::where('page_name', 'interior-design')->first();
        return view('pages.interior-design', compact('seoMeta'));
    }

    public function threeDDesign()
    {
        $seoMeta = SeoMeta::where('page_name', '3d-design')->first();
        return view('pages.3d-design', compact('seoMeta'));
    }

    public function blog()
    {
        $seoMeta = SeoMeta::where('page_name', 'blog')->first();
        $posts = Post::where('status', true)->latest('published_at')->paginate(9);
        return view('pages.blog', compact('posts', 'seoMeta'));
    }

    public function post($slug)
    {
        $post = Post::where('slug', $slug)->where('status', true)->firstOrFail();
        $seoMeta = SeoMeta::where('page_name', $slug)->first();
        return view('pages.post', compact('post', 'seoMeta'));
    }

    public function contact()
    {
        $seoMeta = SeoMeta::where('page_name', 'contact')->first();
        return view('pages.contact', compact('seoMeta'));
    }

    public function storeContact(Request $request)
    {
        try {
            $response = $this->receptiveContact->contact($request);
            return redirect()->route('contact')->with($response['status'], $response['message']);
        } catch (\Exception $e) {
            return redirect()->route('contact')->with('error', 'Erro ao enviar mensagem: ' . $e->getMessage());
        }
    }

    public function privacyPolicy()
    {
        $seoMeta = SeoMeta::where('page_name', 'privacy-policy')->first();
        return view('pages.privacy-policy', compact('seoMeta'));
    }

    public function termsOfService()
    {
        $seoMeta = SeoMeta::where('page_name', 'terms-of-service')->first();
        return view('pages.terms-of-service', compact('seoMeta'));
    }

}
