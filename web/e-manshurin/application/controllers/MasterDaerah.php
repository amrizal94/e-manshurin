<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MasterDaerah extends CI_Controller
{
    public function index()
    {
        $data['master_name'] = 'Daerah';
        $data['title'] = 'Master ' . $data['master_name'];
        $data['user'] = $this->user_data;
        $data['optioncss'] = array('vendor/datatables/dataTables.bootstrap4.min.css');
        $data['optionjs'] = array(
            'vendor/datatables/jquery.dataTables.min.js',
            'vendor/datatables/dataTables.bootstrap4.min.js',
            'js/demo/datatables-demo.js',
        );
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('master/daerah', $data);
        $this->load->view('templates/footer', $data);
    }
}
