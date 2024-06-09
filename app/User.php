<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    /**
     * Get the galleries this user has
     * 
     * @return [Gallery]
     */
    public function galleries() {
        return $this->hasMany('App\Gallery');
    }
    
    /**
     * Get the images this user has
     * 
     * @return [Image]
     */
    public function images() {
        return $this->hasMany('App\Image');
    }
    
    /**
     * Get the pages this user has
     * 
     * @return [Page]
     */
    public function pages() {
        return $this->hasMany('App\Page');
    }
    
    /**
     * Get the videos this user has
     * 
     * @return [Video]
     */
    public function videos() {
        return $this->hasMany('App\Video');
    }
}
