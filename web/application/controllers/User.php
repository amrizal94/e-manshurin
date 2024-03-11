<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'user');
    }

    public function index()
    {
        $data['title'] = "Akun";
        $data['user'] = $this->user_data;
        $data['level_user'] = $this->user->level($data['user']['akun_id']);
        $data['optionjs'] = array(
            'js/user/main.js',
        );
        $data['optioncss'] = array(
            'css/user/style.css',
        );
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function coba()
    {
        var_dump($this->input->post('username'));
        die;
    }
}
