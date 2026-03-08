<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Visitor;

class DashboardController extends Controller
{
    public function index()
    {
        $metrics = [
            'visitors' => Visitor::count(),
            'published_posts' => Post::where('status', true)->count(),
            'total_posts' => Post::count(),
            'unread_contacts' => Contact::whereNull('read_at')->count(),
        ];

        return view('admin.dashboard', compact('metrics'));
    }
}
