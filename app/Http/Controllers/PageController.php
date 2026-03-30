<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Post;
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
        $latestPosts = Post::where('status', true)->latest('published_at')->take(3)->get();
        return view('pages.home', compact('latestPosts'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function residentialProjects()
    {
        return view('pages.residential-projects');
    }

    public function commercialProjects()
    {
        return view('pages.commercial-projects');
    }

    public function interiorDesign()
    {
        return view('pages.interior-design');
    }

    public function threeDDesign()
    {
        return view('pages.3d-design');
    }

    public function blog()
    {
        $posts = Post::where('status', true)->latest('published_at')->paginate(9);
        return view('pages.blog', compact('posts'));
    }

    public function post($slug)
    {
        $post = Post::where('slug', $slug)->where('status', true)->firstOrFail();
        return view('pages.post', compact('post'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function storeContact(Request $request)
    {
        $response = $this->receptiveContact->contact($request);
        
        return redirect()->route('contact')->with($response['status'], $response['message']);
    }
}
