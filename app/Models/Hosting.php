<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hosting extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'hosting';
	public function host() {
		return $this->belongsTo('App\Models\Host');
	}
	public function convention() {
		return $this->belongsTo('App\Models\Convention');
	}
}
