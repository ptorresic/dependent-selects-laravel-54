<?php

namespace App\Http\Controllers;

use Alert;
use App\City;
use App\Country;
use App\Http\Requests\LocationRequest;
use App\Location;
use App\State;
use Illuminate\Http\Request;
use DB;

class LocationController extends Controller
{
    public function index()
    {
        $locations = DB::table('cities')
            ->join('locations', 'cities.id', '=', 'locations.city_id')
            ->join('states', 'states.id', '=', 'cities.state_id')
            ->join('countries', 'countries.id', '=', 'states.country_id')
            ->select(
                'locations.id AS location_id',
                'locations.updated_at AS location_update',
                'cities.id AS city_id',
                'cities.name AS city_name',
                'states.name AS state_name',
                'countries.name AS country_name'
            )
            ->orderBy('locations.updated_at', 'desc')
            ->get();
        return view('locations.index',compact('locations'));
    }

    public function create()
    {
        $countries = Country::all();
        return view('locations.create',compact('countries'));
    }

    public function store(LocationRequest $request)
    {
        Location::create($request->all());
        Alert::success('Created.', 'Done!')->autoclose(1000);
        return redirect(route('locations.index'));
    }

    public function show($id)
    {
        $location = DB::table('locations')
            ->join('cities', 'locations.city_id', '=', 'cities.id')
            ->join('states', 'cities.state_id', '=', 'states.id')
            ->join('countries', 'states.country_id', '=', 'countries.id')
            ->where('locations.id', '=', $id)
            ->select(
                'locations.id AS location_id',
                'cities.name AS city_name',
                'states.name AS state_name',
                'countries.name AS country_name'
            )
            ->first();
        return view('locations.show', compact('location'));
    }

    public function edit($id)
    {
        $location = DB::table('locations')
            ->join('cities', 'locations.city_id', '=', 'cities.id')
            ->join('states', 'cities.state_id', '=', 'states.id')
            ->join('countries', 'states.country_id', '=', 'countries.id')
            ->where('locations.id', '=', $id)
            ->select(
                    'locations.id',
                    'cities.id AS city_id',
                    'cities.name AS city_name',
                    'states.id AS state_id',
                    'states.name AS state_name',
                    'countries.id AS country_id',
                    'countries.name AS country_name'
            )
            ->first();

        $countries = Country::all();

        $states = State::all();

        $cities = City::all();

        return view('locations.edit', compact('location', 'countries', 'states', 'cities'));
    }

    public function update($id, LocationRequest $request)
    {
        $location = Location::findOrFail($id);
        $location->update($request->all());
        Alert::success('Updated.', 'Done!')->autoclose(1000);
        return redirect(route('locations.index'));
    }

    public function destroy($id)
    {
        $result = Location::findOrFail($id);
        $result->delete();
        Alert::success('Deleted.', 'Done!')->autoclose(1000);
        return redirect(route('locations.index'));
    }

    public function getStateList(Request $request)
    {
        $states = DB::table('states')
            ->where('country_id', $request->country_id)
            ->pluck('name', 'id');
        return response()->json($states);
    }
    public function getCityList(Request $request)
    {
        $cities = DB::table('cities')
            ->where('state_id', $request->state_id)
            ->pluck('name', 'id');
        return response()->json($cities);
    }
}
