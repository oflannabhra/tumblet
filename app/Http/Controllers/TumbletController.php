<?php namespace Tumblet\Http\Controllers;

use Tumblet\Http\Requests;
use Tumblet\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class TumbletController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function show($tumblrName)
	{
		dd($tumblrName);
	}
	
	public function storeAndRedirect ()
	{
		$tumblrname = Input::get('tumblrname');

		return Redirect::to("{$tumblrname}/");
	}
	

}
