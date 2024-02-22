<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MasterUser extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Master User';
        $data['user'] = $this->user_data;
        $data['tablecss'] = 'vendor/datatables/dataTables.bootstrap4.min.css';
        $data['tablejs'] = [
            'jquery' => 'vendor/datatables/jquery.dataTables.min.js',
            'bootstrap' => 'vendor/datatables/dataTables.bootstrap4.min.js',
            'demo' => 'js/demo/datatables-demo.js',
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('master/user', $data);
        $this->load->view('templates/footer', $data);
    }
}
