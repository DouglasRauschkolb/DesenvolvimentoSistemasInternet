<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Models\Post;

use Illuminate\Support\Facades\Validator;

class PostController extends Controller {

    public function index() {
        $posts = Post::orderBy("post_date", "desc")->get();

        return view("posts", [
            "posts" => $posts
        ]);
    }

    public function create() {
        $post = new Post();

        $tags = Tag::all();

        return view("post", [
            "post" => $post,
            "tags" => $tags
        ]);
    }

    public function store(Request $request) {
        $rules = [
            'title' => 'required|min:3',
            'text' => 'required|min:3'
        ];

        $messages = [
            'title.required' => 'O campo titulo deve ser preenchido',
            'title.min' => 'O campo titulo deve ter pelo menos 3 caracteres',
            'text.required' => 'O campo texto deve ser preenchido',
            'text.min' => 'O campo texto deve ter pelo menos 3 caracteres',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        $post = new Post();
        $post->post_date = $request->input("post_date");
        $post->title = $request->input("title");
        $post->summary = $request->input("summary");
        $post->text = $request->input("text");
        if ($request->input("active") == "on") {
            $post->active = true;
        } else {
            $post->active = false;
        }



        $post->save();

        $post->tags()->attach($request->input("tags"));

        return redirect()->route("posts-list");

    }

    public function edit($id) {
        $post = Post::find($id);

        $tags = Tag::all();

        return view("post", [
            "post" => $post,
            "tags" => $tags
        ]);
    }

    public function update(Request $request, $id) {
        $rules = [
            'title' => 'required|min:3',
            'text' => 'required|min:3'
        ];

        $messages = [
            'title.required' => 'O campo titulo deve ser preenchido',
            'title.min' => 'O campo titulo deve ter pelo menos 3 caracteres',
            'text.required' => 'O campo texto deve ser preenchido',
            'text.min' => 'O campo texto deve ter pelo menos 3 caracteres',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        $post = Post::find($id);
        $post->post_date = $request->input("post_date");
        $post->title = $request->input("title");
        $post->summary = $request->input("summary");
        $post->text = $request->input("text");
        if ($request->input("active") == "on") {
            $post->active = true;
        } else {
            $post->active = false;
        }

        $post->save();

        $post->tags()->sync($request->input("tags"));

        return redirect()->route("posts-list");

    }

    public function destroy($id) {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route("posts-list");
    }

}
