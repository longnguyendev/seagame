<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public function medals()
    {
        // return $this->belongsToMany(Medal::class, 'details')->withPivot('season_id')->withDefault(function (Medal $medal, Country $country) {
        //     $country->pivot->season_id = 1;
        // });

        return $this->belongsToMany(Medal::class, 'details');
    }
}
