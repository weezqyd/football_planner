<?php

namespace App\Http\Controllers;

use App\Entities\Team;
use App\Entities\Group;

class GroupsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @param Group $groups Group model instance
     **/
    public function __construct(Group $groups)
    {
        $this->groups = $groups;
        $this->middleware('auth')->only('create');
    }

    /**
     * Show vie for displaying groups.
     *
     * @return Illuminate\Http\Response HTTP Response
     **/
    public function index()
    {
        $groups = $this->groups->all();

        return view('groups.index', compact('groups'));
    }

    /**
     * Create match fixtures and distibute the matches to various venues.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Team $teams)
    {
        // Redirect if the tea count is not 32
        if ($teams->count() !== 32) {
            session(['error' => 'There should be 32 teams in this tournament for the fixtures to be generated']);

            return redirect()->route('teams.index');
        }
        $teams = $teams->all()->shuffle();
        resolve('db')->table('group_teams')->truncate();
        $this->groups->all()->each(function ($group, $key) use ($teams) {
            $count = 4; //  The number of teams in each group
            $get = $key * $count; // The position to start slicing the teams
            $slice = $teams->slice($get, $count);
            $slice->each(function ($team) use ($group) {
                $group->teams()->save($team);
            });
        });

        return redirect()->route('groups.index');
    }
}
