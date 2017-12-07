<?php

namespace App\Http\Controllers;

use App\Models\Convention;
use App\Models\Attendance;
use App\Models\Expecting;
use Illuminate\Http\Request;

class ConventionController extends Controller
{
    public function index()
    {
		$conventions = Convention::all();
		return $conventions->map(function ($convention, $key) {
			$convention->isAttendedBy = 
				Attendance
				::where('convention_id', $convention->convention_id)
				->get();
			$convention->expects = 
				Expecting
				::where('convention_id', $convention->convention_id)
				->get();
			return $convention;
		});
    }
	public function convention($id)
	{
		$convention = Convention::find($id);
		return $convention;
	}
	public function store(Request $request)
	{
		$convention = new Convention;
		$convention->room_id = $request->room_id;
		$convention->start_time = $request->start_time;
		$convention->end_time = $request->end_time;
		$convention->invitation_only = $request->invitation_only;
		$convention->name = $request->name;
		$convention->description = $request->description;
		$convention->save();
		return [
			'success' => 'true'
		];
	}
}
