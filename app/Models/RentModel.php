<?php

namespace App\Models;

use CodeIgniter\Model;

class RentModel extends Model
{
    protected $table = 'rents';
    protected $primaryKey = 'rent_id';
    protected $allowedFields = [
        'rent_nama_mobil',
        'rent_driver',
        'rent_fuel',
        'rent_harga',
        'rent_max_jam',
        'rent_max_penumpang',
        'rent_transmisi',
        'rent_ac',
        'rent_smoking',
        'rent_foto'
    ];

    public function insertRent($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function getRent($id = false)
    {
        if ($id === false) {
            return $this->db->table($this->table)->get()->getResult();
        } else {
            return $this->db->table($this->table)->getWhere([$this->primaryKey => $id])->getRow();
        }
    }

    // public function getRentId($id)
    // {
    // }

    public function updateRent($id, $data)
    {
        return $this->db->table($this->table)->update($data, array($this->primaryKey => $id));
    }

    public function deleteRent($id)
    {
        return $this->db->table($this->table)->delete([$this->primaryKey => $id]);
    }
}
