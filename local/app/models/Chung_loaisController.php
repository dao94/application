<?php

class Chung_loaisController extends BaseController {

	/**
	 * Chung_loai Repository
	 *
	 * @var Chung_loai
	 */
	protected $chung_loai;

	public function __construct($chung_loai)
	{
		$this->chung_loai = $chung_loai;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$chung_loais = $this->chung_loai->all();

		return View::make('chung_loais.index', compact('chung_loais'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('chung_loais.create');
	}



}
