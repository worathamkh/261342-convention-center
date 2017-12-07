<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
		$rooms = Room::all();
		return $rooms;
    }
	public function room($id)
	{
		$room = Room::find($id);
		return $room;
	}
	public function store(Request $request)
	{
		$room = new Room;
		$room->name = $request->name;
		$room->room_type_id = $request->room_type_id;
		$room->save();
		return [ 'success' => true ];
	}
}
