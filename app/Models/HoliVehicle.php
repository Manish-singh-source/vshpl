<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HoliVehicle extends Model
{
    protected $fillable = [
        'wing',
        'vehicle_type',
        'full_name',
        'flat_number',
        'mobile_number',
        'email',
        'vehicle_number',
    ];
}
