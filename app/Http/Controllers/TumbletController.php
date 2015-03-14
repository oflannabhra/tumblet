<?php namespace Tumblet\Http\Controllers;

use Illuminate\Pagination\Paginator;
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
	public function show($tumblrName, $currentPage)
	{
		$tumblet = $this->tumbletRepository->getByName($tumblrName);
		$posts = $this->tumbletPostRepository->getPostsForTumbletAndPage($tumblet, $currentPage);

		$numPages = ceil($tumblet->postTotal / 10);

		return View::make('tumblet.show')
			->with('tumblet', $tumblet)
			->with('posts', $posts)
			->with('numPages', $numPages)
			->with('currentPage', $currentPage)
			->with('pages', $this->getPagination($numPages, $currentPage));
	}
	
	public function storeAndRedirect ()
	{
		$tumblrname = Input::get('tumblrname');

		return Redirect::to("{$tumblrname}/1");
	}

	protected function getPagination ($totalPages, $currentPage)
	{
	    $previousPage = $currentPage - 1;
		$nextPage = $currentPage + 1;
		$centeredPageList = range($currentPage-4, $currentPage+4);

		$prePages = [];
		$postPages = [];
		$i = 0;
		$j = $currentPage-10;

		$distFrom0 = $currentPage;
		$distFromEnd = $totalPages - $currentPage;
		return array_merge(range(), array($currentPage), array_reverse($postPages));
	}

}
