<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->user_data && $this->router->method != 'logout') {
            redirect('dasboard');
        }
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $input = [
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
            ];

            $user = $this->db->get_where('akun', [
                'username' => $input['username']
            ])->row_array();

            if (!$user) {
                $this->session->set_flashdata('message', '
                <div class="alert alert-danger" role="alert">
                    Username not registered!
                </div>');
                redirect('auth');
            }
            if ($user['status_akun'] == 0) {
                $this->session->set_flashdata('username', $input['username']);
                $this->session->set_flashdata('message', '
                <div class="alert alert-warning" role="alert">
                your account is deactivated!
                </div>');
                redirect('auth');
            }
            if (!password_verify($input['password'], $user['password'])) {
                $this->session->set_flashdata('username', $input['username']);
                $this->session->set_flashdata('message', '
                <div class="alert alert-danger" role="alert">
                    Wrong password!
                </div>');
                redirect('auth');
            }
            $data = [
                'id' => $user['id']
            ];
            $this->session->set_userdata($data);
            if ($this->session->userdata('last_url')) {
                redirect($this->session->userdata('last_url'));
            }
            redirect('auth');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[akun.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[repassword]', [
            'matches' => 'The Password field does not match',
            'min_lenght' => 'The Password too short'
        ]);
        $this->form_validation->set_rules('repassword', 'Repeat Password', 'matches[password]');
        if ($this->form_validation->run()) {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'level_user_id' => 1,
                'status_akun' => 1,
            ];
            $this->db->insert('akun', $data);
            $insert_id = $this->db->insert_id();
            $data['name'] = htmlspecialchars($this->input->post('name', true));
            $gender = $this->_genderPredict($data['name']);
            $user = array(
                'akun_id' => $insert_id,
                'nama' => $data['name'],
                'jenis_kelamin' => $gender,
                'foto' => $gender . "_default.jpg",
            );
            $this->db->insert('user', $user);
            $this->db->delete('akun', array('id' => 5));
            $this->session->set_flashdata('message', '
            <div class="alert alert-success" role="alert">
                Congratulation! your account has been created. Please Login
            </div>');
            redirect('auth');
        }
        $data['title'] = 'Register';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/register');
        $this->load->view('templates/auth_footer');
    }

    public function  logout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('expired');
        $this->session->unset_userdata('last_url');
        $this->session->set_flashdata('message', '
            <div class="alert alert-info" role="alert">
                You have been logout!
            </div>');
        redirect('auth');
    }

    private function _genderPredict($fullname)
    {
        $firstname = explode(" ", $fullname);
        $content = file_get_contents("https://api.genderize.io/?name=" . $firstname[0]);

        $result  = json_decode($content);
        if ($result) {
            if ($result->gender == "male") {
                return 'M';
            } else {
                return 'F';
            }
        } else {
            return 'X';
        }
    }
}
