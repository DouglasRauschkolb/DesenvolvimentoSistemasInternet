<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Tag;

use Illuminate\Support\Facades\Validator;

class TagController extends Controller {

    public function index() {
        $tags = Tag::all();

        return view("tags", [
            "tags" => $tags
        ]);
    }

    public function create() {
        $tag = new Tag();

        return view("tag", [
            "tag" => $tag
        ]);
    }

    public function store(Request $request) {
        $rules = [
            'name' => 'required|min:3'
        ];

        $messages = [
            'name.required' => 'O campo name deve ser preenchido',
            'name.min' => 'O campo name deve ter pelo menos 3 caracteres'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        $tag = new Tag();

        $tag->name = $request->input("name");

        $tag->save();
        return redirect()->route("tags-list");

    }

    public function edit($id) {
        $tag = Tag::find($id);

        return view("tag", [
            "tag" => $tag
        ]);
    }

    public function update(Request $request, $id) {
        $rules = [
            'name' => 'required|min:3'
        ];

        $messages = [
            'name.required' => 'O campo name deve ser preenchido',
            'name.min' => 'O campo name deve ter pelo menos 3 caracteres'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        $tag = Tag::find($id);

        $tag->name = $request->input("name");

        $tag->save();
        return redirect()->route("tags-list");

    }

    public function destroy($id) {
        $tag = Tag::find($id);
        $tag->delete();

        return redirect()->route("tags-list");
    }

}
