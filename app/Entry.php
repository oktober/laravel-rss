<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
	//Disable automatic created_at and updated_at columns for Eloquent
	public $timestamps = false;

    public function feed() {
		return $this->belongsTo(Feed::class);
    }
}