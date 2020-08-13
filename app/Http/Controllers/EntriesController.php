<?php

namespace App\Http\Controllers;

use App\Entry;

class EntriesController extends Controller
{
    public function show(){

    	/* Show Feeds */
    	/*$feeds = Feed::get();
    	return view('feeds', ['feeds' => $feeds]);*/

    	/* Show Entries for one feed */
    	$entries = Entry::get();
    	return view('entries', ['entries' => $entries]);
    }
}
