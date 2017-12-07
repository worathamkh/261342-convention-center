<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expecting extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'expecting';
	public function attendee() {
		return $this->belongsTo('App\Models\Attendee');
	}
	public function convention() {
		return $this->belongsTo('App\Models\Convention');
	}
}
