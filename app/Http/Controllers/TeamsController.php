<?php

namespace App\Http\Controllers;

use App\Entities\Team;
use App\Support\Countries;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    /**
     * Create a new controller instance.
     **/
    public function __construct(Team $teams, Countries $countries)
    {
        $this->teams = $teams;
        $this->countries = $countries;
        $this->middleware('auth')->only(['create', 'store']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = $this->teams->orderBy('country', 'ASC')->get();

        return view('teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = $this->countries->all();

        return view('teams.create', compact('countries'));
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
        $messages = ['country.unique' => 'The team already exists in the tounament'];
        $this->validate($request, ['country' => 'required|unique:teams,country_code'], $messages);
        $country = $this->countries->find($request->get('country'));
        $data = [
            'country' => $country->name,
            'region' => $country->region,
            'country_code' => $country->cca2,
            //we will leave this for now as ti is of no much importance
            'rank' => 0,
            'qualify_position' => 1,
        ];
        if ($this->teams->count() >= 32) {
            session(['error' => 'The maximum number of teams for this tournament has been reached']);

            return redirect()->route('teams.index');
        }
        $this->teams->create($data);

        return redirect()->route('teams.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }
}
