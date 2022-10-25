<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\City;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
        * $countries = model name::orderBy('Code', 'asc')->latest()->paginate(8);
        * return view('folder.file', compact('array name'))->
        * with('i', (request()->input('page', 1)-1)*8); row belongs to pagination

     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::orderBy('Code', 'asc')->latest()->paginate(8);

        $countriesCount = number_format(Country::count(), 0, ".", " ");
        return view('countries.listCountry', compact('countries', 'countriesCount'))->
        with('i', (request()->input('page', 1)-1)*8);
    }

    public function search(Request $request){
        // get the search value from request
        $search = $request->input('search');

        //search in the Name and Continent columns from the country table
        $countries = Country::query()
        ->where('Name', 'LIKE', "%{$search}%")
        ->orWhere('Continent', 'LIKE', "%{$search}%")
        ->get();
        // return the search view with the result compacted
        return view('countries.searchCountry', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
        $country = Country::where('code', $code)->first();
        $country['Population']= number_format($country['Population'], 0, ".", " ");
        $countryCities = City::orderBy('Population', 'desc')->where('CountryCode', $country->Code)->get();
        foreach ($countryCities as $city) {
            $city['Population'] = number_format($city['Population'], 0, ".", " ");
        }
        $citiesCount = number_format(count($countryCities), 0, ".", " ");
        return view('countries.show', compact('country', 'countryCities', 'citiesCount'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        //
    }
}
