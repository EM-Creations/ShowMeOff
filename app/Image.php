<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * Get the gallery this image belongs to
     * 
     * @return Gallery
     */
    public function gallery() {
        $this->belongsTo('App\Gallery');
    }
    
    /**
     * Get the user who added this image
     * 
     * @return User
     */
    public function addedBy() {
        return $this->belongsTo('App\User', 'added_by');
    }
}
