<?php

namespace App\Controllers;

use App\Models\KopiModel;

class Kopi extends BaseController
{

	protected $kopiModel;
	public function __construct() {
		$this->kopiModel = new KopiModel();
	}
	
	public function index()
	{

		$data = [
			'kopi' => $this->kopiModel->getKopi()
		];

		return view('kopi/index', $data);
	}

	public function detail($slug) {
		$data = [
			'kopi' => $this->kopiModel->getKopi($slug)
		];
		
		return view('kopi/detail', $data);
	}

	public function create() {

		return view('kopi/create');
	}

	

	//--------------------------------------------------------------------

}
