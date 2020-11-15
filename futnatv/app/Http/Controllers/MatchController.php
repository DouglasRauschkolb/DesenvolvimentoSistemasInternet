<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Controllers\Controller;
use App\Models\Channel;
use App\Models\Match;

class MatchController {

    public function index() {
        $matches = Match::orderBy("date", "desc")->get();

        return view("matches", [
            "matches" => $matches
        ]);
    }

    public function create() {
        $match = new Match();
        $match->date = date("Y-m-d\T00:00:00");

        $channels = Channel::all();

        return view("match", [
            "match" => $match,
            "channels" => $channels
        ]);
    }

    public function store(Request $request) {
        $match = new Match();
        $match->team1 = $request->input("team1");
        $match->team2 = $request->input("team2");
        $match->date = $request->input("date");

        $match->save();

        $match->channels()->attach($request->input("channels"));

        return redirect()->route("matches-list");

    }

    public function edit($id) {
        $match = Match::find($id);

        $channels = Channel::all();

        return view("match", [
            "match" => $match,
            "channels" => $channels
        ]);
    }

    public function update(Request $request, $id) {
        $match = Match::find($id);
        $match->team1 = $request->input("team1");
        $match->team2 = $request->input("team2");
        $match->date = $request->input("date");

        $match->save();

        $match->channels()->sync($request->input("channels"));

        return redirect()->route("matches-list");

    }

    public function destroy($id) {
        $match = Match::find($id);
        $match->delete();

        return redirect()->route("matches-list");
    }

}
