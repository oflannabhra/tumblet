<?php namespace Tumblet\Http\Controllers;

use Illuminate\Support\Facades\View;
use Tumblet\Http\Requests;
use Tumblet\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Tumblet\Tumblet\TumbletRepository;
use Tumblet\Tumblet\TumbletPostRepository;

class TumbletController extends Controller {

	private $tumbletRepository;
	private $tumbletPostRepository;

	public function __construct (TumbletRepository $tumbletRepository, TumbletPostRepository $tumbletPostRepository)
	{
	    $this->tumbletRepository = $tumbletRepository;
		$this->tumbletPostRepository = $tumbletPostRepository;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function show($tumblrName, $pageNum)
	{
		$tumblet = $this->tumbletRepository->getByName($tumblrName);
		$posts = $this->tumbletPostRepository->getPostsForTumbletAndPage($tumblet, $pageNum);

		return View::make('tumblet.show')
			->with('tumblet', $tumblet)
			->with('posts', $posts);
	}
	
	public function storeAndRedirect ()
	{
		$tumblrname = Input::get('tumblrname');

		return Redirect::to("{$tumblrname}/{$pageNum}");
	}
	

}
