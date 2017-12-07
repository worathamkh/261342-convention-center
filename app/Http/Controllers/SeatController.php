<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    public function index()
    {
		$seats = Seat::all();
		return $seats;
    }
	public function seat($id)
	{
		$seat = Seat::find($id);
		return $seat;
	}
	public function store(Request $request)
	{
		$seat = new Seat;
		$seat->zone_id = $request->zone_id;
		$seat->number = $request->number;
		$seat->save();
		return [
			'success' => 'true'
		];
	}
}
