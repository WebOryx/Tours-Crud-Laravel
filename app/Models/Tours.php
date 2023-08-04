<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tours extends Model
{
    use HasFactory;

    public function type()
    {
        return $this->hasOne('App\Models\TourType','id','tour_type');
    }
}
