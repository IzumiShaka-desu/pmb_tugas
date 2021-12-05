<?php namespace App\Models;

use CodeIgniter\Model;

class UserModels extends Model
{
    public function getUserList()
    {
        return $this->db->table('user')->getWhere([])->getResultArray();
    }
    public function addUser($user)
    {
        return $this->db->table('user')->insert($user);
    }
    public function updateUser($id, $user)
    {
        if ($this->db->table('user')->getWhere(["IDUser" => $id])->getResultArray() == null) {
            return $this->db->table('user')->insert($user);
        }
        return $this->db->table('user')->update($user, ["IDUser" => $id]);
    }
    public function deleteUser($id)
    {
        return $this->db->query('DELETE FROM `user` WHERE IDUser=?',[$id]);
    }

    public function getUserById($id){
            return $this->db->table('user')->getWhere(["IDUser"=>$id])->getResultArray();
        }

}

?>