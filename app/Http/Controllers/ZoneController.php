<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
    public function index()
    {
		$zones = Zone::all();
		return $zones;
    }
	public function zone($id)
	{
		$zone = Zone::find($id);
		return $zone;
	}
	public function store(Request $request)
	{
		$zone = new Zone;
		$zone->room_id = $request->room_id;
		$zone->number = $request->number;
		$zone->price = $request->price;
		$zone->save();
		return [
			'success' => 'true'
		];
	}
}
