<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;
use App\Models\Solar_system;


class PlanetController extends Controller
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
        $solarSystems = Solar_system::all();
    
        return view('index', [
            'planets' => $planets,
            'solarsystems' => $solarSystems
        ]);
    }
    
    public function show($planet)
    {
        $planet = Planet::where('name', $planet)->firstOrFail();
        $solarsystem = Solar_system::where('id', $planet->solar_system_id)->firstOrFail();
    
        return view('show', [
            'planet' => $planet, 'solarsystem' => $solarsystem
        ]);
    }
    
}