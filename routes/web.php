<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/{width?}/{height?}', function ($width = null, $height = null) {
    
     //Check if the width and height is set
     if($width != NULL && $height != NULL)
     {
        $pictures = array("alan.jpg", "darinka.jpg", "ipet.jpg", "marcus.jpg", "ramesh.jpg", "ryan.jpg", "vico.jpg");
        return view('image', compact('width', 'height', 'pictures'));
     } 
    
     //If not set show home/welcome documentation page
     return view('welcome');
     
   
});


