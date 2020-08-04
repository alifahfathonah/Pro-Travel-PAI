<?php

namespace App\Controllers;

use App\Models\TripModel;

class Trip extends BaseController
{

    public function __construct()
    {
        helper(['form']);
        helper(['pembantu']);
        $this->Trip = new TripModel();
        //Do your magic here
    }

    public function index($id = false)
    {

        if ($id === false) {
            $data = [
                'title' => 'Trip',
                'child' => 'dataTrip',
                'trips' => $this->Trip->getTrip(),
                'content' => 'trip/v_index.php'
            ];
            return view('index-backend.php', $data);
        } else {
            $data = [
                'title' => 'Trip',
                'child' => 'dataTrip',
                'trip' => $this->Trip->getTrip($id),
                'content' => 'trip/v_detail.php'
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
                    'rent_foto'          => $this->request->getPost('oldFoto')
                ];

                $this->Trip->updateTrip($id, $data);

                return redirect()->to(base_url('/admin/trip'));
            } else {
                $image = $this->request->getFile('foto');
                $name = $image->getRandomName();
                $data = [
                    'rent_nama_mobil'    => $this->request->getPost('namaMobil'),
                    'rent_driver'        => $this->request->getPost('driver'),
                    'rent_fuel'          => $this->request->getPost('fuel'),
                    'rent_foto'          => $name,
                ];

                $image->move(ROOTPATH . 'public/uploads/trips', $name);

                $this->Trip->updateTrip($data, $id);

                return redirect()->to(base_url('/admin/trip'));
            }
        } else {
            $data = [
                'title' => 'Trip',
                'child' => 'dataTrip',
                'trips' => $this->Trip->getTrip($id),
                'content' => 'trips/v_update.php'
            ];
            return view('index-backend.php', $data);
        }
    }

    public function create()
    {
        $data = [
            'title' => 'Trip',
            'child' => 'tambahTrip',
            'content' => 'trip/v_tambah.php'
        ];
        return view('index-backend.php', $data);
    }

    public function store()
    {
        $image = $this->request->getFile('foto');
        $name = $image->getRandomName();
        $data = [
            'trip_nama' => $this->request->getPost('nama'),
            'trip_desc' => $this->request->getPost('desc'),
            'trip_foto' => $name,
        ];

        $image->move(ROOTPATH . 'public/uploads/trips', $name);

        $this->Trip->insertTrip($data);

        return redirect()->to(base_url('/admin/trip'));
    }

    public function edit()
    {
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

        $image->move(ROOTPATH . 'public/uploads/trips', $name);

        $this->Trip->updateTrip($data, $id);

        return redirect()->to(base_url('/admin/trip'));
    }

    public function delete($id)
    {
        $this->Trip->delete($id);
        return redirect()->back();
    }

    //--------------------------------------------------------------------

}
