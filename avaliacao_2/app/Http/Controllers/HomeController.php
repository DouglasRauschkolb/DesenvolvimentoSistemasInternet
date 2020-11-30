<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\Post;

class HomeController extends Controller {

    public function __construct() {
    }

    public function index() {
        $posts = Post::where('active', true)->orderBy('post_date', 'desc')->take(3)->get();

        return view('home', [
            'posts' => $posts
        ]);
    }

    public function logout() {
        Auth::logout();
        return redirect()->route("home");
    }

}

