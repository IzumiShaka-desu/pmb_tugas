<?php namespace App\Models;

use CodeIgniter\Model;

class userModels extends Model
{
    public function getUserForm($id)
    {
        return $this->db->table('user')->getWhere(["IDUser" => $id])->getResultArray();
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
    public function deleteUser($id, $Nama, $Password, $hakAkses, $manager, $Date)
    {
        return $this->db->query('DELETE FROM `user` WHERE IDUser=? AND Nama = ? AND Password = ? AND Hak_Akses=? AND Manager=?
        AND Create_Date=?',
        [$id, $Password, $hakAkses, $manager, $Date]);
    }

}

?>