<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {
		return [
			'hello' => 'world'
		];
        // return view('index', [
        //     'title' => 'Home'
        // ]);
    }
}
