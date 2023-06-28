<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;
use App\Models\Solar_system;


class SolarSystemController extends Controller
{
    protected $planets;
    protected $solarsystems;

    public function __construct()
    {
        $this->planets = Planet::all();
        $this->solarsystems = Solar_system::all();
    }
    public function index()
    {
        $planets = Planet::all();
        $solarSystems = Solar_system::withCount('planets')->get();
    
        return view('index2', [
            'planets' => $planets,
            'solarsystems' => $solarSystems
        ]);
    }
    
    public function show($solarsystem)
    {
        $solarsystem = Solar_system::where('id', $solarsystem)->first();
        $planets = Planet::all();

    
        return view('show2', [
            'solarsystem' => $solarsystem, 'planets' => $planets
        ]);
    }
    
}