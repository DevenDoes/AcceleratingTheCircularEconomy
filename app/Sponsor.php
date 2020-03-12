<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{

    /*
     * Define the mass assignable columns for the model
     */
    protected $fillable = [
        'name',
        'description',
    ];

    /*
     * Get the images for the sponsor
     */
    public function images() {

        return $this->morphToMany('App\Image', 'imageable');

    }

}
