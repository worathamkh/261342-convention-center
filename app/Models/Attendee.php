<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'attendee';
	public function expectings() {
		return $this->hasMany('App\Models\Expecting');
	}
	public function followings() {
		return $this->hasMany('App\Models\Following');
	}
	public function attendances() {
		return $this->hasMany('App\Models\Attendance');
	}
}
