<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Season extends Model
{
    use HasFactory;

    public function countries()
    {
        return $this->belongsToMany(Country::class, 'details');
    }
}
