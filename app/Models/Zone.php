<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'zone';
	public function room() {
		return $this->belongsTo('App\Models\Room');
	}
	public function seats() {
		return $this->hasMany('App\Models\Seat');
	}
}
