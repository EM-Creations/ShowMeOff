<?php
// Model

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    /**
     * Get the parent page
     * 
     * @return Page
     */
    public function parentPage() {
        return $this->belongsTo('App\Page', 'parent_page');
    }
    
    /**
     * The galleries that belong to the page
     * 
     * @return [Gallery]
     */
    public function galleries() {
        return $this->belongsToMany('App\Gallery');
    }
    
    /**
     * Get the user who added this page
     * 
     * @return User
     */
    public function addedBy() {
        return $this->belongsTo('App\User', 'added_by');
    }
}
