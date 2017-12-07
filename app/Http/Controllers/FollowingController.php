<?php

namespace App\Http\Controllers;

use App\Models\Following;
use Illuminate\Http\Request;

class FollowingController extends Controller
{
    public function index()
    {
		$followings = Following::all();
		return $followings;
    }
	public function store(Request $request)
	{
		$following = new Following;
		$following->attendee_id = $request->attendee_id;
		$following->host_id = $request->host_id;
		$following->save();
		return [
			'success' => 'true'
		];
	}
}
