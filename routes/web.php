<?php

use App\Models\Country;
use App\Models\Medal;
use App\Models\Modal;
use App\Models\Season;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // $season = Season::with('countries.medals')->find(1);
    $seasonId = 1;
    // $season = Season::with(['countries' => function ($query) use ($seasonId) {
    //     $query->wherePivot('season_id', $seasonId);
    // }, 'countries.medals' => function ($query) use ($seasonId) {
    //     $query->wherePivot('season_id', $seasonId);
    // }])->find($seasonId);

    // $season = Season::withCountries()->where('season_id', 1)->find(1);


    $seasons = Season::all();

    foreach ($seasons as $season) {
        $season->countries = $season->countries()->distinct()->get();
        $countries = $season->countries;
        foreach ($countries as $country) {
            $country->medals = $country->medals()->withPivot('total')->where('season_id', $season->id)->get();
        }
    }

    // $season = Season::with(['countries' => function ($query) {
    //     $query->distinct()->with('medals')->where('season_id', 1);
    // }])->get();

    return response($season);
});


Route::get('/data', function () {
    $data = DB::table('details')
        ->select('seasons.year as season_year', 'countries.name as country_name', 'medals.name as medal_name', 'details.total')
        ->join('seasons', 'seasons.id', '=', 'details.season_id')
        ->join('countries', 'countries.id', '=', 'details.country_id')
        ->join('medals', 'medals.id', '=', 'details.medal_id')
        // ->where('seasons.id', '=', '1')
        ->where('year', 2021)->get();
    return response($data);
});

//SELECT * FROM countries c INNER JOIN details d on c.id = d.country_id INNER JOIN seasons s ON s.id = d.season_id INNER JOIN medals m on m.id = d.medal_id WHERE year = 2021
