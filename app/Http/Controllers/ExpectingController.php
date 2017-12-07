<?php

namespace App\Http\Controllers;

use App\Models\Expecting;
use Illuminate\Http\Request;

class ExpectingController extends Controller
{
    public function index()
    {
		$expectings = Expecting::all();
		return $expectings;
    }
	public function store(Request $request)
	{
		$expecting = new Expecting;
		$expecting->attendee_id = $request->attendee_id;
		$expecting->convention_id = $request->convention_id;
		$expecting->save();
		return [
			'success' => 'true'
		];
	}
}
