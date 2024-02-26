<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->user_data && $this->router->method != 'logout') {
            redirect('masteruser');
        }
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $input = [
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
            ];

            $user = $this->db->get_where('user', [
                'email' => $input['email']
            ])->row_array();

            if (!$user) {
                $this->session->set_flashdata('message', '
                <div class="alert alert-danger" role="alert">
                    Email not registered!
                </div>');
                redirect('auth');
            }
            if ($user['is_active'] == 0) {
                $this->session->set_flashdata('email', $input['email']);
                $this->session->set_flashdata('message', '
                <div class="alert alert-warning" role="alert">
                    Email has not been activated! please check your inbox or spam email.
                </div>');
                redirect('auth');
            }
            if (!password_verify($input['password'], $user['password'])) {
                $this->session->set_flashdata('email', $input['email']);
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
            redirect('masteruser');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has been registered'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[repassword]', [
            'matches' => 'The Password field does not match',
            'min_lenght' => 'The Password too short'
        ]);
        $this->form_validation->set_rules('repassword', 'Repeat Password', 'matches[password]');

        if ($this->form_validation->run()) {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
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
}
