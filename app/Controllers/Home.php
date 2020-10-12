<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['main'] = 'main/dashboard';
		return view('layout/wrapper', $data);
	}
}