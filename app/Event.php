<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    /*
     * Define the mass assignable columns for the model
     */
    protected $fillable = [
        'title',
        'start_date',
        'end_date',
        'description',
    ];

    /*
     * Get the people for the event
     */
    public function people() {

        return $this->morphToMany('App\Person', 'personable');

    }

    /*
     * Get the images for the event
     */
    public function images() {

        return $this->morphToMany('App\Image', 'imageable');

    }

}
