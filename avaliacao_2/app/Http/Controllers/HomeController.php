<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\Auth;

use App\Models\Post;

class HomeController extends Controller {

    public function __construct() {
    }

    public function index() {
        $posts = Post::whereDate('post_date', date('Y-m-d'))->get();

        return view('home', [
            'posts' => $posts
        ]);
    }

    public function logout() {
        Auth::logout();
        return redirect()->route("home");
    }

}

