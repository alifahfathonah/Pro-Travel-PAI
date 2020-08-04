<?php

namespace App\Controllers;

use App\Models\RegularModel;

class Regular extends BaseController
{

	public function __construct()
	{
		helper(['form']);
		helper(['pembantu']);
		$this->Regular = new RegularModel();
		//Do your magic here
	}

	public function index($id = false)
	{

		if ($id === false) {
			$data = [
				'title' => 'Regular',
				'child' => 'dataRegular',
				'regulars' => $this->Regular->getRegular(),
				'content' => 'regular/v_index.php'
			];
			return view('index-backend.php', $data);
		} else {
			$data = [
				'title' => 'Regular',
				'child' => 'dataRegular',
				'regulars' => $this->Regular->getRegular($id),
				'content' => 'regular/v_detail.php'
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

				$this->Regular->updateRegular($id, $data);

				return redirect()->to(base_url('/admin/regular'));
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

				$this->Regular->updateRegular($data, $id);

				return redirect()->to(base_url('/admin/regular'));
			}
		} else {
			$data = [
				'title' => 'Regular',
				'child' => 'dataRegular',
				'regulars' => $this->Regular->getRegular($id),
				'content' => 'regular/v_update.php'
			];
			return view('index-backend.php', $data);
		}
	}

	public function create()
	{
		$data = [
			'title' => 'Regular',
			'child' => 'tambahRegular',
			'content' => 'regular/v_tambah.php'
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

		$this->Regular->insertRegular($data);

		return redirect()->to(base_url('/admin/regular'));
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

		$this->Regular->updateRegular($data, $id);

		return redirect()->to(base_url('/admin/regular'));
	}

	public function delete($id)
	{
		$this->Regular->delete($id);
		return redirect()->back();
	}

	//--------------------------------------------------------------------

}
