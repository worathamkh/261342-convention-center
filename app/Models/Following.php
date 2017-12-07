<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Following extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'following';
	public function attendee() {
		return $this->belongsTo('App\Models\Attendee');
	}
	public function host() {
		return $this->belongsTo('App\Models\Host');
	}
}
