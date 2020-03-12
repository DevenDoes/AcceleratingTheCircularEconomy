<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{

    /*
     * Define the mass assignable columns for the model
     */
    protected $fillable = [
        'title',
        'date',
        'start_time',
        'end_time',
        'description',
    ];

    /*
     * Get the people for the schedule
     */
    public function people() {

        return $this->morphToMany('App\Person', 'personable');

    }

}
