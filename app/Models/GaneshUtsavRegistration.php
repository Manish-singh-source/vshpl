<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GaneshUtsavRegistration extends Model
{
    protected $fillable = [
        'resident_type',
        'wing',
        'flat_number',
        'full_name',
        'mobile_number',
        'contribution_amount',
        'has_extra_coupon',
        'extra_coupon_quantity',
        'extra_coupon_unit_amount',
        'extra_coupon_total',
        'is_sponsor',
        'sponsor_description',
        'sponsor_about',
        'sponsor_amount',
        'sponsor_payment_method',
        'sponsor_payment_screenshot',
        'grand_total',
    ];

    protected $casts = [
        'has_extra_coupon' => 'boolean',
        'is_sponsor' => 'boolean',
    ];
}
