<?php

namespace App\Controllers;

use App\Models\RentModel;

class Rent extends BaseController
{

	public function __construct()
	{
		helper(['form']);
		helper(['pembantu']);
		$this->Rent = new RentModel();
		//Do your magic here
	}

	public function index($id = false)
	{

		if ($id === false) {
			$data = [
				'title' => 'Rent',
				'child' => 'dataRent',
				'rents' => $this->Rent->getRent(),
				'content' => 'rent/v_index.php'
			];
			return view('index-backend.php', $data);
		} else {
			$data = [
				'title' => 'Rent',
				'child' => 'dataRent',
				'rents' => $this->Rent->getRent($id),
				'content' => 'rent/v_detail.php'
			];
			return view('index-backend.php', $data);
		}
	}


	public function update($id = false)
	{
		if ($id === false) {
			$image = $this->request->getFile('foto');
			if ($image === null) {
				$id = $this->request->getPost('id');
				$data = [
					'rent_nama_mobil'    => $this->request->getPost('namaMobil'),
					'rent_driver'        => $this->request->getPost('driver'),
					'rent_fuel'          => $this->request->getPost('fuel'),
					'rent_harga'         => $this->request->getPost('harga'),
					'rent_max_jam'       => $this->request->getPost('maxJam'),
					'rent_max_penumpang' => $this->request->getPost('maxPenumpang'),
					'rent_transmisi'     => $this->request->getPost('transmisi'),
					'rent_ac'            => $this->request->getPost('ac'),
					'rent_smoking'       => $this->request->getPost('smoking'),
					'rent_foto'          => $this->request->getPost('oldFoto')
				];

				$this->Rent->updateRent($id, $data);

				return redirect()->to(base_url('/admin/rent'));
			} else {
				$image = $this->request->getFile('foto');
				$name = $image->getRandomName();
				$data = [
					'rent_nama_mobil'    => $this->request->getPost('namaMobil'),
					'rent_driver'        => $this->request->getPost('driver'),
					'rent_fuel'          => $this->request->getPost('fuel'),
					'rent_harga'         => $this->request->getPost('harga'),
					'rent_max_jam'       => $this->request->getPost('maxJam'),
					'rent_max_penumpang' => $this->request->getPost('maxPenumpang'),
					'rent_transmisi'     => $this->request->getPost('transmisi'),
					'rent_ac'            => $this->request->getPost('ac'),
					'rent_smoking'       => $this->request->getPost('smoking'),
					'rent_foto'          => $name,
				];

				$image->move(ROOTPATH . 'public/uploads/rents', $name);

				$this->Rent->updateRent($data, $id);

				return redirect()->to(base_url('/admin/rent'));
			}
		} else {
			$data = [
				'title' => 'Rent',
				'child' => 'dataRent',
				'rents' => $this->Rent->getRent($id),
				'content' => 'rent/v_update.php'
			];
			return view('index-backend.php', $data);
		}
	}

	public function create()
	{
		$data = [
			'title' => 'Rent',
			'child' => 'tambahRent',
			'content' => 'rent/v_tambah.php'
		];
		return view('index-backend.php', $data);
	}

	public function store()
	{
		$image = $this->request->getFile('foto');
		$name = $image->getRandomName();
		$data = [
			'rent_nama_mobil'    => $this->request->getPost('namaMobil'),
			'rent_driver'        => $this->request->getPost('driver'),
			'rent_fuel'          => $this->request->getPost('fuel'),
			'rent_harga'         => $this->request->getPost('harga'),
			'rent_max_jam'       => $this->request->getPost('maxJam'),
			'rent_max_penumpang' => $this->request->getPost('maxPenumpang'),
			'rent_transmisi'     => $this->request->getPost('transmisi'),
			'rent_ac'            => $this->request->getPost('ac'),
			'rent_smoking'       => $this->request->getPost('smoking'),
			'rent_foto'          => $name,
		];

		$image->move(ROOTPATH . 'public/uploads/rents', $name);

		$this->Rent->insertRent($data);

		return redirect()->to(base_url('/admin/rent'));
	}

	public function edit()
	{
		var_dump("Egova");
		exit;
		$image = $this->request->getFile('foto');
		$name = $image->getRandomName();
		$id = $this->request->getPost('id');
		$data = [
			'rent_nama_mobil'    => $this->request->getPost('namaMobil'),
			'rent_driver'        => $this->request->getPost('driver'),
			'rent_fuel'          => $this->request->getPost('fuel'),
			'rent_harga'         => $this->request->getPost('harga'),
			'rent_max_jam'       => $this->request->getPost('maxJam'),
			'rent_max_penumpang' => $this->request->getPost('maxPenumpang'),
			'rent_transmisi'     => $this->request->getPost('transmisi'),
			'rent_ac'            => $this->request->getPost('ac'),
			'rent_smoking'       => $this->request->getPost('smoking'),
			'rent_foto'          => $name,
		];

		$image->move(ROOTPATH . 'public/uploads/rents', $name);

		$this->Rent->updateRent($data, $id);

		return redirect()->to(base_url('/admin/rent'));
	}

	public function delete($id)
	{
		$this->Rent->delete($id);
		return redirect()->back();
	}

	//--------------------------------------------------------------------

}
