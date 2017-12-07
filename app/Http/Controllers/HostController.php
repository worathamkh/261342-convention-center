<?php

namespace App\Http\Controllers;

use App\Models\Host;
use App\Models\Hosting;
use App\Models\Following;
use App\Models\Registered;
use Illuminate\Http\Request;

class HostController extends Controller
{
    public function index()
    {
		$hosts = Host::all();
		return $hosts->map(function ($host, $key) {
			$registered = 
				Registered
				::find($host->id);
			$registered->hosts = 
				Hosting
				::where('host_id', $host->id)
				->get();
			$registered->isFollowedBy = 
				Following
				::where('host_id', $host->id)
				->get();
			return $registered;
		});
    }
	public function host($id)
	{
		$host = Host::find($id);
		return $host;
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
		$host = new Host;
		$host->id = $registered->id;
		$host->save();
		return [
			'success' => 'true'
		];
	}
}
