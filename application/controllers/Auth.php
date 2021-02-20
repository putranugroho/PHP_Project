<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function login()
    {
        check_login();
        $this->load->view('login');
    }

    public function proses()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $split    = str_split($password);
        $new_pass = array();
        foreach ($split as &$value) {
            $value = ord($value) + 103;
            array_push($new_pass, 195);
            array_push($new_pass, $value);
        }
        $new_pass = implode("", $new_pass);
        $post = array(
            'username'    => $username,
            'password'    => $new_pass
        );
        $this->load->model('m_user');
        $query = $this->m_user->login($post);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $params = array(
                'userid' => $row->userid,
                'level' => $row->level
            );
            $this->session->set_userdata($params);
            echo "<script>
                    alert('selamat, login berhasil')
                    window.location='" . site_url('home') . "'
                </script>";
        }
    }

    public function logout()
    {
        $params = array('userid', 'level');
        $this->session->unset_userdata($params);
        redirect('auth/login');
    }
}
