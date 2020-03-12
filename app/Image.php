<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    /*
     * Define the mass assignable columns for the model
     */
    protected $fillable = [
        'name',
        'alt_text',
    ];

    /*
     * Get sections for this image
     */
    public function sections() {

        return $this->morphedByMany('App\Section', 'imageable');

    }

    /*
     * Get the events for this image
     */
    public function events() {

        return $this->morphedByMany('App\Event', 'imageable');

    }

    /*
     * Get the people for this image
     */
    public function people() {

        return $this->morphedByMany('App\Person', 'imageable');

    }

    /*
     * Get the people for this image
     */
    public function sponsors() {

        return $this->morphedByMany('App\Sponsor', 'imageable');

    }

}
