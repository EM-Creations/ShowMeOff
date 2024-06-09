<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
    /**
     * Show the home page
     *
     * @return \Illuminate\Http\Response
     */
    public function goToHome()
    {
        $video = \App\Video::where('title', "Showreel")->first(); // Get the showreel video
        return View::make('welcome')->with(array(
            'video' => $video
        ));
    }
    
    /**
     * Show the main illustrations page
     *
     * @return \Illuminate\Http\Response
     */
    public function goToIllustrations()
    {
        $galleries = \App\Gallery::all(); // Get all of the galleries
        $images = \App\Image::where('gallery_id', 1)->get(); // Get the images for the 1st gallery
        return View::make('illustrations')->with(array(
            'galleries' => $galleries,
            'images' => $images,
            'currGalleryID' => 1
        ));
    }
    
    /**
     * Show the illustrations page for the specified gallery
     *
     * @return \Illuminate\Http\Response
     */
    public function goToIllustrationsByGallery($galleryID)
    {
        $galleries = \App\Gallery::all(); // Get all of the galleries
        $images = \App\Image::where('gallery_id', $galleryID)->get(); // Get the images for the gallery specified
        
        if (!$images->isEmpty()) { // Check that there are images with the specified gallery ID
            return View::make('illustrations')->with(array(
                'galleries' => $galleries,
                'images' => $images,
                'currGalleryID' => $galleryID
            ));
        } else {
            abort(404); // Page not found
        }
    }
    
    /**
     * Go to the about page
     * 
     * @return \Illuminate\Http\Response
     */
    public function goToAbout()
    {
        $about = "<p>Lorna Bunnie is an illustrator with a particular interest in the colour pink.
                    She specialises in character design and strives to make cartoons more fun with 
                    diverse and interesting character designs and concepts.</p>
                    
                    <p>If you're a University of Hertfordshire employee or student, please <a target=\"_blank\" href=\"http://www.3dhit.co.uk/index.php?showuser=27368\">click here</a> to see Lorna's 3DHit page.</p>";
        return View::make('about')->with('about', $about);
    }
    
    /**
     * Go to the contact page
     * 
     * @return \Illuminate\Http\Response
     */
    public function goToContact()
    {
        $email = "contact@lornabunnie.co.uk";
        return View::make('contact')->with('email', $email);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
