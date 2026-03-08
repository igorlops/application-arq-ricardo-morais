<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest('id')->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'featured_image' => 'nullable|image|max:2048',
            'status' => 'boolean'
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        if ($request->has('status') && $request->status) {
            $validated['published_at'] = now();
        }

        if ($request->hasFile('featured_image')) {
            $path = $request->file('featured_image')->store('posts', 'public');
            $validated['featured_image'] = $path;
        }

        Post::create($validated);

        return redirect()->route('admin.posts.index')->with('success', 'Post criado com sucesso!');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'featured_image' => 'nullable|image|max:2048',
            'status' => 'boolean'
        ]);

        if ($validated['title'] !== $post->title) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        if ($request->has('status') && $request->status && !$post->published_at) {
            $validated['published_at'] = now();
        } elseif (!$request->has('status') || !$request->status) {
            $validated['published_at'] = null;
            $validated['status'] = false;
        } else {
            $validated['status'] = true;
        }

        if ($request->hasFile('featured_image')) {
            if ($post->featured_image) {
                Storage::disk('public')->delete($post->featured_image);
            }
            $path = $request->file('featured_image')->store('posts', 'public');
            $validated['featured_image'] = $path;
        }

        $post->update($validated);

        return redirect()->route('admin.posts.index')->with('success', 'Post atualizado com sucesso!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', 'Post movido para a lixeira.');
    }
}
