<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    /**
     * Get the user who added this video
     * 
     * @return User
     */
    public function addedBy() {
        return $this->belongsTo('App\User', 'added_by');
    }
    
    /**
     * Get the HTML to output this video's player
     * 
     * @return $html HTML content
     */
    public function getPlayer($width, $height) {
        $html = "";
        
        switch ($this->type) {
            case "vimeo":
                //$html = "<iframe src=\""  . $this->video . "\" width=\"" . $width . "\" height=\"" . $height . "\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>";
                $html = "<div style=\"padding:56.25% 0 0 0;position:relative;\"><iframe src=\"" . $this->video . "?byline=0\" style=\"position:absolute;top:0;left:0;width:" . $width  . "%;height:" . $height . "%;\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div><script src=\"https://player.vimeo.com/api/player.js\"></script>";
                break;
            
            case "youtube":
                $html = "<div style=\"position:relative;height:0;padding-bottom:56.21%\"><iframe src=\"" . $this->video . "\" style=\"position:absolute;width:100%;height:100%;left:0\" width=\"" . $width . "\" height=\"" . $height . "\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe></div>";
                break;
                
            default:
                $html = "<iframe src=\""  . $this->video . "\" width=\"" . $width . "\" height=\"" . $height . "\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>";
        }
        return $html;
    }
}
