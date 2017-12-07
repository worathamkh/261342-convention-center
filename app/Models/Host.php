<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Host extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'host';
	public function hostings() {
		return $this->hasMany('App\Models\Hosting');
	}
	public function followings() {
		return $this->hasMany('App\Models\Following');
	}
}
