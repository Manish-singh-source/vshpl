<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HoliCelebration extends Model
{
    protected $fillable = [
        'participation_status',
        'wing',
        'flat_number',
        'full_name',
        'mobile_number',
        'coupons',
        'total_amount',
        'payment_mode',
        'payment_done',
        'payment_screenshot',
    ];
}
