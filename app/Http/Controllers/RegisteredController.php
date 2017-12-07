<?php

namespace App\Http\Controllers;

use App\Models\Registered;
use Illuminate\Http\Request;

class RegisteredController extends Controller
{
    public function index()
    {
		$registereds = Registered::all();
		return $registereds;
    }
	public function registered($id)
	{
		$registered = Registered::find($id);
		return $registered;
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
		return [
			'success' => 'true'
		];
	}
}
