<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'full_name',
        'house_number',
        'wing',
        'contact_number',
        'email',
        'team_category',
        'player_roles',
        'agreement',
        'payment',
    ];
}
