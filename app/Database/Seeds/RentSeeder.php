<?php

namespace App\Database\Seeds;

class RentSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            'rent_nama_mobil'    => 'Nama Tes',
            'rent_driver'        => 'Y',
            'rent_fuel'          => 'Y',
            'rent_harga'         => 1,
            'rent_max_jam'       => 1,
            'rent_max_penumpang' => 1,
            'rent_transmisi'     => 'Y',
            'rent_ac'            => 'Y',
            'rent_smoking'       => 'Y',
            'rent_foto'          => 'testFoto',
        ];
        $this->db->table('rents')->insert($data);
    }
}
