<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(){
        $team = Team::latest()->paginate(9);
        return view("team.index", [
            "team" => $team,
        ]);
    }

    public function store(Team $team, Request $request) {
        $team = new Team();
        $team->name = $request->name;
        $team->title = $request->title;
        $team->description = $request->description;
        $team->save();
        return redirect("/team");
    }

    public function update(Team $team, Request $request) {
        $team->update($request->all());
        return redirect("/team");
    }
}
