<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    /*
     * Define the mass assignable columns for the model
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'affiliation',
        'message',
    ];

}
