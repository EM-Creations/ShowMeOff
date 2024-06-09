<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    /**
     * Get the images for this gallery
     * 
     * @return [Image]
     */
    public function images() {
        return $this->hasMany('App\Image');
    }
    
    /**
     * The pages that the gallery is included in
     * 
     * @return [Page]
     */
    public function pages() {
        return $this->belongsToMany('App\Page');
    }
    
    /**
     * Get the user who added this gallery
     * 
     * @return User
     */
    public function addedBy() {
        return $this->belongsTo('App\User', 'added_by');
    }
}
