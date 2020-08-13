<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feed;
use App\Entries;

class HomeController extends Controller
{
    public function listRecentEntries() {
		$feeds = Feed::with('entries')->get();
		

    	return view('home', ['feeds' => $feeds]);
    }
}
