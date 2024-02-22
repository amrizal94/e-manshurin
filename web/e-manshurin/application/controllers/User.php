<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Akun";
        $data['user'] = $this->db->get_where('user', [
            'id' => $this->session->userdata('id')
        ])->row_array();
        if (!$data['user']) {
            $this->session->set_flashdata('message', '
            <div class="alert alert-warning" role="alert">
                Please login first!
            </div>
            ');
            redirect('auth');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }
}
