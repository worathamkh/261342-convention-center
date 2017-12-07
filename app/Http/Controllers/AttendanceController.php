<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
		$attendances = Attendance::all();
		return $attendances;
    }
	public function store(Request $request)
	{
		$attendance = new Attendance;
		$attendance->attendee_id = $request->attendee_id;
		$attendance->convention_id = $request->convention_id;
		$attendance->seat_id = $request->seat_id;
		$attendance->save();
		return [
			'success' => 'true'
		];
	}
}
