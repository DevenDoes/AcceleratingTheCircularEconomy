<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{

    /*
     * Define the mass assignable columns for the model
     */
    protected $fillable = [
        'page_id',
        'name',
    ];

    /*
     * Get the page that owns the section
     */
    public function page() {

        return $this->belongsTo('App\Page');

    }

    /*
     * Get the content for the section
     */
    public function content() {

        return $this->hasMany('App\Content');

    }

    /*
     * Get the images for the section
     */
    public function images() {

        return $this->morphToMany('App\Image', 'imageable');

    }

}
