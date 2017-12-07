<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'seat';
	public function zone() {
		return $this->belongsTo('App\Models\Zone');
	}
}
