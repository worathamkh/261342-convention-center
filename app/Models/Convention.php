<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Convention extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'convention';
	public function room() {
		return $this->belongsTo('App\Models\Room');
	}
	public function hostings() {
		return $this->hasMany('App\Models\Hosting');
	}
	public function expectings() {
		return $this->hasMany('App\Models\Expecting');
	}
	public function attendances() {
		return $this->hasMany('App\Models\Attendance');
	}
}
