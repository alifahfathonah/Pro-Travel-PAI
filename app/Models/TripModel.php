<?php

namespace App\Models;

use CodeIgniter\Model;

class TripModel extends Model
{
    protected $table = 'trips';
    protected $primaryKey = 'trip_id';
    protected $allowedFields = [
        'trip_nama',
        'trip_desc',
        'trip_foto'
    ];

    public function insertTrip($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function getTrip($id = false)
    {
        if ($id === false) {
            return $this->db->table($this->table)->get()->getResult();
        } else {
            return $this->db->table($this->table)->getWhere([$this->primaryKey => $id])->getRow();
        }
    }

    public function updateTrip($id, $data)
    {
        return $this->db->table($this->table)->update($data, array($this->primaryKey => $id));
    }

    public function deleteTrip($id)
    {
        return $this->db->table($this->table)->delete([$this->primaryKey => $id]);
    }
}
