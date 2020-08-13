<?php

namespace App\Http\Controllers;

/*use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;*/
//use DB;
use App\Feed;

class FeedsController extends Controller
{
    public function show(){
    	$feeds = Feed::get();
    	return view('feeds', ['feeds' => $feeds]);
    }
}
