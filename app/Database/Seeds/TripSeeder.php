<?php

namespace App\Database\Seeds;

class TripSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            'trip_nama' => 'Nama Tes',
            'trip_desc' => 'Y',
            'trip_foto' => 'Y',
        ];
        $this->db->table('trips')->insert($data);
    }
}
