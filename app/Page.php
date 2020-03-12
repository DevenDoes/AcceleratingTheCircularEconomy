<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

    /*
     * Define the mass assignable columns for the model
     */
    protected $fillable = [
        'name',
    ];


    /*
     * Get the sections for the page
     */
    public function sections() {

        return $this->hasMany('App\Section');

    }

    /*
     * Get the content for the page
     */
    public function content() {

        return $this->hasManyThrough('App\Content','App\Section');

    }

    /*
     * Get the images for the page
     */
    public function images() {

        return $this->hasManyThrough('App\Image', 'App\Section');

    }

}
