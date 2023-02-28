<?php

namespace App\Http\Controllers;

use App\Services\DemoService;

class DemoController extends Controller
{
	protected $demoService;

	function __construct(
		DemoService $demoService
	) {
		$this->demoService = $demoService;
	}


	/**
	 * It returns the result of calling the show() method on the demoService object
	 * 
	 * @return The show method of the DemoService c	lass.
	 */
	public function show()
	{
		return $this->demoService->show();
	}

	public function signIn()
	{
		return view('signIn');
	}
	
	public function signUp()
	{
		return view('signUp');
	}
}
