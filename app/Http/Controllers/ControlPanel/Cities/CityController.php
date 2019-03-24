<?php

namespace App\Http\Controllers\ControlPanel\Cities;

use App\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return City[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        $cities = City::all();

        if (\request()->expectsJson()) return $cities;

        return view('controlPanel.cities.index')->withCities($cities);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required']);

        $city = City::create($request->only(['name']));

        return $city;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param City $city
     * @return City
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, City $city)
    {
        $this->validate($request, ['name' => 'required']);

        $city->update($request->only(['name']));

        return $city;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
