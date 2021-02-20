<?php

class M_user extends CI_Model
{
    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('r_userprofile');
        $this->db->where('userid', $post['username']);
        $query = $this->db->get();
        // if ($query->num_rows() > 1) {
        $new_pass = array();
        foreach ($query->result() as $key) {
            $key = $key->{'pass'};
            $key = str_split($key);
            foreach ($key as $pass) {
                $pass = ord($pass);
                array_push($new_pass, $pass);
            }
            $new_pass = implode("", $new_pass);
            if ($new_pass == $post['password']) {
                return $query;
            } else {
                unset($new_pass);
                $new_pass = array();
            }
        }
        if (count($new_pass) == 0) {
            echo "<script>
                alert('login gagal')
                window.location='" . site_url('auth/login') . "'
            </script>";
        }
    }

    public function get($id = null)
    {
        $this->db->from('r_userprofile');
        if ($id != null) {
            $this->db->where('userid', $id);
        }
        $query = $this->db->get();
        return $query;
    }
}
