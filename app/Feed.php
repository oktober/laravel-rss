<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
	//Disable automatic created_at and updated_at columns for Eloquent
	public $timestamps = false;

    public function entries(){
    	return $this->hasMany(Entry::class);
    }
}
