<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessDirectoryRegistration extends Model
{
    protected $fillable = [
        'full_name',
        'wing',
        'flat_number',
        'role',
        'company_name',
        'business_category',
        'short_description',
        'mobile_number',
        'email_address',
        'website_url',
        'business_profile',
        'interested_in',
        'preferred_contact_method',
    ];

    protected $casts = [
        'interested_in' => 'array',
    ];
}
