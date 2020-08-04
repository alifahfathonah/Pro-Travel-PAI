<?php

namespace App\Models;

use CodeIgniter\Model;

class RegularModel extends Model
{
    protected $table = 'regulars';
    protected $primaryKey = 'regular_id';
    protected $allowedFields = [
        'relugar_kode',
        'relugar_nama_paket',
        'relugar_include',
        'relugar_exclude',
        'relugar_rute',
        'relugar_trip_array',
        'relugar_harga',
        'relugar_desc',
        'relugar_foto',
    ];

    public function insertRegular($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function getRegular($id = false)
    {
        if ($id === false) {
            return $this->db->table($this->table)->get()->getResult();
        } else {
            return $this->db->table($this->table)->getWhere([$this->primaryKey => $id])->getRow();
        }
    }

    public function updateRegular($id, $data)
    {
        return $this->db->table($this->table)->update($data, array($this->primaryKey => $id));
    }

    public function deleteRegular($id)
    {
        return $this->db->table($this->table)->delete([$this->primaryKey => $id]);
    }
}
