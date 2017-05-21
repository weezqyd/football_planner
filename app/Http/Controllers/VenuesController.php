<?php

namespace App\Http\Controllers;

use App\Entities\Venue;
use Illuminate\Http\Request;

class VenuesController extends Controller
{
    /**
     * Match venues.
     *
     * @var Venue
     **/
    protected $venues;

    /**
     * Create a new controller instance.
     *
     * @param Venue $venues Match venues model
     **/
    public function __construct(Venue $venues)
    {
        $this->venues = $venues;
        $this->middleware('auth')->only(['create', 'store']);
    }

    /**
     * Show a listing of all match venues.
     *
     * @return Illuminate\Http\Response HTTP view Response
     **/
    public function index()
    {
        // Since it was difficult to locate all stadium images we will use random images
        $images = ['g4.jpg', 'g1.jpg', 'g3.jpg', 'banner.jpg', 'banner-2.jpg'];
        $venues = $this->venues->all();

        return view('venues.index', compact('venues', 'images'));
    }

    /**
     * Show interface for adding match venues.
     *
     * @return \Illuminate\Http\Response
     **/
    public function create()
    {
        return view('venues.create');
    }

    /**
     * Persist venue to storage.
     *
     * @param Request $request HTTP Request
     **/
    public function store(Request $request)
    {
        $this->validate($request, ['stadium' => 'required|unique:venues', 'city' => 'required', 'capacity' => 'required|numeric']);
        $this->venues->create($request->all());
        session(['success' => 'Vanue added successfully']);

        return back();
    }
}
