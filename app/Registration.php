<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{

    /*
     * Define the mass assignable columns for the model
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'title',
        'organization',
        'email',
        'university_pid',
        'registration_code',
    ];

}
