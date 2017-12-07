<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'room_type';
	public function rooms() {
		return $this->hasMany('App\Models\Room');
	}
}
