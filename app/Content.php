<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{

    /*
     * Define the mass assignable columns for the model
     */
    protected $fillable = [
        'attribute',
        'value',
        'type',
    ];

    /*
     * Get the section for the content
     */
    public function section() {

        return $this->belongsTo('App\Section');

    }

}
