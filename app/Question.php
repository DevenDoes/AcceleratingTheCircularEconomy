<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    /*
     * Define the mass assignable columns for the model
     */
    protected $fillable = [
        'question',
        'answer',
    ];

}
