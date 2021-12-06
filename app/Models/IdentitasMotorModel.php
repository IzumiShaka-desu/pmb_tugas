<?php namespace App\Models;

use CodeIgniter\Model;

class IdentitasMotorModel extends Model
{
    public function getUserList()
    {
        return $this->db->table('identitas_motor')->getWhere([])->getResultArray();
    }
    public function addUser($identitas_motor)
    {
        return $this->db->table('identitas_motor')->insert($identitas_motor);
    }
    public function getUserById($id){
            return $this->db->table('identitas_motor')->getWhere(["ID"=>$id])->getResultArray();
        }

}
