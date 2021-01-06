<?php

namespace App\Controllers;

use App\Models\KeranjangModel;

class Keranjang extends BaseController
{

	protected $keranjangModel;
	public function __construct()
	{
		$this->keranjangModel = new KeranjangModel();
	}

	public function index()
	{

		$keranjang = $this->keranjangModel->findAll();

		$data = [
			'keranjang' => $keranjang
		];

		return view('keranjang/index', $data);
	}

	public function save()
	{

		$slug = url_title($this->request->getVar('nama_kopi'), '-', true);
		$this->keranjangModel->save([
			'nama_kopi' => $this->request->getVar('nama_kopi'),
			'slug' => $slug,
			'jumlah' => $this->request->getVar('jumlah'),
			'gambar' => $this->request->getVar('gambar')
		]);

		return redirect()->to('/keranjang');
	}

	public function delete($id)
	{
		$this->keranjangModel->delete($id);
		return redirect()->to('/keranjang');
	}

	public function edit($slug)
	{
		$data = [
			'keranjang' => $this->keranjangModel->getKeranjang($slug)
		];

		return view('keranjang/edit', $data);
	}

	public function update($id)
	{
		$slug = url_title($this->request->getVar('nama_kopi'), '-', true);
		$this->keranjangModel->save([
			'id' => $id,
			'nama_kopi' => $this->request->getVar('nama_kopi'),
			'slug' => $slug,
			'jumlah' => $this->request->getVar('jumlah'),
			'gambar' => $this->request->getVar('gambar')
		]);

		return redirect()->to('/keranjang');
	}

	//--------------------------------------------------------------------

}
