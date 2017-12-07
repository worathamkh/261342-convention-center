<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'room';
	public function roomType() {
		return $this->belongsTo('App\Models\RoomType');
	}
	public function zones() {
		return $this->hasMany('App\Models\Zone');
	}
	public function conventions() {
		return $this->hasMany('App\Models\Convention');
	}
}
