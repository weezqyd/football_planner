<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Entities\Group;
use App\Entities\Match;
use App\Entities\Venue;
use Illuminate\Http\Request;

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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    protected function generateFixture(int $t1, int $t2, int $t3, int $t4, int $fixture)
    {
        $venues = Venue::all();
        $this->groups->all()->each(function ($group, $key) use ($venues, $fixture) {
            $fixtures = [];
            $venue1 = $venues->random();
            $kickOff = Carbon::now()->addDays($key * $fixture + 3)->hour(12)->minute(00)->second(00);
            $homeTeam = $group->teams->get($t1);
            $awayTeam = $group->teams->get($t2);
            $fixtures[] = [
                'home_team' => $homeTeam->id,
                'away_team' => $awayTeam->id,
                'kick_off' => $kickOff,
                'venue_id' => $venue1->id,
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
                'kick_off' => $kickOff->hour(14),
                'venue_id' => $venue2->id,
            ];
            foreach ($fixtures as $key => $fixture) {
                Match::create($fixture);
            }
        });
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
