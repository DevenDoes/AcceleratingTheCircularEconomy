<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{

    /*
     * Define the mass assignable columns for the model
     */
    protected $fillable = [
        'name',
        'role',
        'title',
        'website',
        'email',
        'linkedin',
        'biography',
    ];

    /*
     * Get schedules for this person
     */
    public function schedules() {

        return $this->morphedByMany('App\Schedule', 'personable');

    }

    /*
     * Get the events for this person
     */
    public function events() {

        return $this->morphedByMany('App\Event', 'personable');

    }

}
