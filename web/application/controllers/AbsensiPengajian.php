<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AbsensiPengajian extends CI_Controller
{
    public function index()
    {
        $data['sub_title'] = 'Pengajian';
        $data['title'] = 'Absensi ' . $data['sub_title'];
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
        $this->load->view('absensi/pengajian', $data);
        $this->load->view('templates/footer', $data);
    }
}
