<?php

namespace App\Http\Controllers;

use App\Models\Hosting;
use Illuminate\Http\Request;

class HostingController extends Controller
{
    public function index()
    {
		$hostings = Hosting::all();
		return $hostings;
    }
	public function store(Request $request)
	{
		$hosting = new Hosting;
		$hosting->host_id = $request->host_id;
		$hosting->convention_id = $request->convention_id;
		$hosting->save();
		return [
			'success' => 'true'
		];
	}
}
