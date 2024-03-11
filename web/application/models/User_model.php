<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function login($id)
    {
        $query = "SELECT akun.*, user.* 
                  FROM akun 
                  JOIN user 
                  ON akun.id = user.akun_id 
                  WHERE akun.id = $id
                  ";
        return $this->db->query($query)->row_array();
    }

    public function level($id)
    {
        $query = "SELECT *
                  FROM level_user
                  JOIN akun
                  ON akun.level_user_id = level_user.id
                  WHERE akun.id = $id
                  ";

        return $this->db->query($query)->row_array();
    }
}
