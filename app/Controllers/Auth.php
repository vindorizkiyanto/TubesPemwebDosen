<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{

	public function index()
	{
		return view('/auth/index');
	}

	public function login()
	{
		if (session()->get('logged_in')) {

			return redirect()->to('/auth/index');
		}
		helper(['form']);
		$data = [
			'title' => 'LOGIN',

		];
		return view('/auth/login', $data);
	}
	public function masuk()
	{
		$model = new UserModel();
		$email = $this->request->getPost('email');
		$password = $this->request->getPost('password');
		$row = $model->get_data_login($email);
		// dd($row);
		if ($row == NULL) {
			session()->setFlashdata('pesan', 'Email dan Password anda Kosong!!');
			return redirect()->to('/auth/login');
		}
		if ($password == $row->password) {
			$data = array(
				'log' => TRUE,
				'email' => $row->email
			);
			session()->set($data);
			session()->setFlashdata('pesan', 'Berhasil Login');
			return redirect()->to('/auth/index');
		}
		session()->setFlashdata('pesan', 'Password Salah');
		return redirect()->to('/auth/login');
	}

	public function logout()
	{
		$session = session();
		$session->destroy();
		return redirect()->to('/auth/login');
	}


	public function registrasi()
	{
		helper(['form']);
		$data = [
			'title' => 'REGISTRASI',

		];
		return view('/auth/registrasi', $data);
	}
	public function save()
	{
		helper(['form']);
		$data = [
			'title' => 'REGISTRASI',

		];
		//set rules validation form
		$rules = [
			'username'          => 'required|min_length[3]|max_length[20]',
			'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[user.email]',
			'password'      => 'required|min_length[6]|max_length[200]',
			'confpassword'  => 'matches[password]'
		];

		if ($this->validate($rules)) {
			$model = new UserModel();
			$data = [
				'username'     => $this->request->getVar('username'),
				'email'    => $this->request->getVar('email'),
				'password' => $this->request->getVar('password')
			];
			$model->save($data);
			return redirect()->to('/auth/login');
		} else {
			$data['validation'] = $this->validator;
			echo view('/auth/registrasi', $data);
		}
	}
}
