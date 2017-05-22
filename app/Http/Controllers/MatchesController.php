<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Entities\Group;
use App\Entities\Match;
use App\Entities\Venue;

class MatchesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @param Group $groups Groups model
     **/
    public function __construct(Group $groups)
    {
        $this->groups = $groups;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('teams.fixtures');
    }

    /**
     * Create match fixtures and distibute the matches to various venues.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Redirect if the tea count is not 32
        if ($this->groups->count() !== 8) {
            session(['error' => 'You must crate groups in order to create fixtures']);

            return redirect()->route('groups.index');
        }
        resolve('db')->table('mathes')->truncate();
        // First Fixture
        $this->generateFixture(0, 1, 2, 3, 1);
         // Second Fixture
        $this->generateFixture(0, 2, 1, 3, 2);
         // Third Fixture
        $this->generateFixture(3, 0, 2, 1, 3);

        return redirect()->route('fixtures.index');
    }

    /**
     * Generate match match fixtures for the teams in all groups.
     *
     * @param int $t1      Home team for the first fixture
     * @param int $t2      Away team for the first fixture
     * @param int $t3      Home team for the second fixture
     * @param int $t4      Away team for the second fixture
     * @param int $fixture Round of matches played
     *
     * @return \Illuminate\Http\Response
     */
    protected function generateFixture(int $t1, int $t2, int $t3, int $t4, int $fixture)
    {
        $venues = Venue::all();
        $this->groups->all()->each(function ($group, $key) use ($venues, $fixture, $t1, $t2, $t3, $t4) {
            $fixtures = [];
            $venue1 = $venues->random();
            $kickOff = Carbon::now()->addDays($key * $fixture + 3)->hour(12)->minute(00)->second(00);
            $homeTeam = $group->teams->get($t1);
            $awayTeam = $group->teams->get($t2);
            $fixtures[] = [
                'home_team' => $homeTeam->id,
                'away_team' => $awayTeam->id,
                'kick_off' => $kickOff->format('Y-m-d H:i:s'),
                'venue_id' => $venue1->id,
                'result' => '',
                'outcome' => '',
                'status' => '',
            ];
            $venue2 = $venues->random();
            // Make sure that the fist venue is not the same as the second
            while ($venue2->id == $venue1->id) {
                $venue2 = $venues->random();
            }
            $homeTeam1 = $group->teams->get($t3);
            $awayTeam1 = $group->teams->get($t4);
            $fixtures[] = [
                'home_team' => $homeTeam1->id,
                'away_team' => $awayTeam1->id,
                'kick_off' => $kickOff->hour(14)->format('Y-m-d H:i:s'),
                'venue_id' => $venue2->id,
                'result' => '',
                'outcome' => '',
                'status' => '',
            ];
          //  dd($fixtures);
            foreach ($fixtures as $key => $fixture) {
                Match::create($fixture);
            }
        });
    }
}
