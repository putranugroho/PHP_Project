<?php

class M_mahasiswa extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('db_mahasiswa')->result_array();
    }

    public function input_data($data)
    {
        $this->db->insert('db_mahasiswa', $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
