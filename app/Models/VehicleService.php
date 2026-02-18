<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleService extends Model
{
    use HasFactory;

    protected $fillable = [
        'wing',
        'full_name',
        'flat_number',
        'mobile_number',
        'email',
        'vehicle_type',
        'vehicle_number',
    ];

    protected $table = 'vehicle_services';
}
