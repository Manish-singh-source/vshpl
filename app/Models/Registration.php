<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'profile_image',
        'customer_code',
        'full_name',
        'house_number',
        'wing',
        'contact_number',
        'email',
        'team_category',
        'player_roles',
        'tshirt_size',
        'agreement',
        'payment',
        'sponsor_pdf',
    ];
}
