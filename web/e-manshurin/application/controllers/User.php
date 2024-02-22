<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $user = $this->db->get_where('user', [
            'id' => $this->session->userdata('id')
        ])->row_array();
        if (!$user) {
            $this->session->set_flashdata('message', '
            <div class="alert alert-warning" role="alert">
                Please login first!
            </div>
            ');
            redirect('auth');
        }
        echo 'Selamat datang ' . $user['name'];
    }
}
