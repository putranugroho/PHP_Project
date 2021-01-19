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
        $post = $this->input->post(null, TRUE);
        if (isset($post['login'])) {
            $this->load->model('m_user');
            $query = $this->m_user->login($post);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $params = array(
                    'userid' => $row->user_id,
                    'level' => $row->level
                );
                $this->session->set_userdata($params);
                echo "<script>
                    alert('selamat, login berhasil')
                    window.location='" . site_url('home') . "'
                </script>";
            } else {
                echo "<script>
                    alert('login gagal')
                    window.location='" . site_url('auth/login') . "'
                </script>";
            }
        }
    }

    public function logout()
    {
        $params = array('userid', 'level');
        $this->session->unset_userdata($params);
        redirect('auth/login');
    }
}
