<?php

namespace App\Database\Seeds;

class RegularSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            'relugar_kode'       => 'Nama Tes',
            'relugar_nama_paket' => 'Nama Tes',
            'relugar_include'    => 'Nama Tes',
            'relugar_exclude'    => 'Nama Tes',
            'relugar_rute'       => 'Nama Tes',
            'relugar_trip_array' => 'Nama Tes',
            'relugar_harga'      => 'Nama Tes',
            'relugar_desc'       => 'Nama Tes',
            'relugar_foto'       => 'Nama Tes',
        ];
        $this->db->table('regulars')->insert($data);
    }
}
