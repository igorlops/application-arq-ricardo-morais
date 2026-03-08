<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
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
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'message' => 'required|string|max:2000',
        ]);

        Contact::create($validated);

        return redirect()->route('contact')->with('success', 'Sua mensagem foi enviada com sucesso! Entraremos em contato em breve.');
    }
}
