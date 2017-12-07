<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use App\Models\Attendance;
use App\Models\Following;
use App\Models\Expecting;
use App\Models\Registered;
use Illuminate\Http\Request;

class AttendeeController extends Controller
{
    public function index()
    {
		$attendees = Attendee::all();
		return $attendees->map(function ($attendee, $key) {
			$registered = 
				Registered
				::find($attendee->id);
			$registered->attends = 
				Attendance
				::where('attendee_id', $attendee->id)
				->get();
			$registered->follows = 
				Following
				::where('attendee_id', $attendee->id)
				->get();
			$registered->isExpectedAt = 
				Expecting
				::where('attendee_id', $attendee->id)
				->get();
			return $registered;
		});
    }
	public function attendee($id)
	{
		$attendee = Attendee::find($id);
		return $attendee;
	}
	public function store(Request $request)
	{
		$registered = new Registered;
		$registered->email = $request->email;
		$registered->password = $request->password;
		$registered->card_name = $request->card_name;
		$registered->card_number = $request->card_number;
		$registered->card_expr_date = $request->card_expr_date;
		$registered->card_cvv = $request->card_cvv;
		$registered->save();
		$attendee = new Attendee;
		$attendee->id = $registered->id;
		$attendee->save();
		return [
			'success' => 'true'
		];
	}
}
