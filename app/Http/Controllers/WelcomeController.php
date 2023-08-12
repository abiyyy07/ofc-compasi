<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->take(3)->get();
        $achievements = Achievement::latest()->take(3)->get();

        return view('welcome', compact('posts', 'achievements'));
    }
}
