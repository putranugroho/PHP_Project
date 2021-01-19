<?php

class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $data['mahasiswa'] = $this->m_mahasiswa->tampil_data();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('mahasiswa', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $nama       = $this->input->post('nama');
        $nim        = $this->input->post('nim');
        $tgl_lahir  = $this->input->post('tgl_lahir');
        $jurusan    = $this->input->post('jurusan');

        $data = array(
            // 'nama'      => $this->input->post('nama'),
            'nama'      => $nama,
            'nim'       => $nim,
            'tgl_lahir' => $tgl_lahir,
            'jurusan'   => $jurusan,
        );

        $this->m_mahasiswa->input_data($data);
        redirect('mahasiswa/index');
    }

    public function hapus_aksi($id)
    {
        $where = array('id' => $id);
        $this->m_mahasiswa->hapus_data($where, 'db_mahasiswa');
        redirect('mahasiswa/index');
    }

    public function edit_aksi($id)
    {
        $where = array('id' => $id);
        $data['mahasiswa'] = $this->m_mahasiswa->edit_data($where, 'db_mahasiswa');
        foreach ($data['mahasiswa']->result_array() as $row) {
            echo $row['id'];
            echo $row['nama'];
            // echo $row['body'];
        }
        // $this->load->view('templates/header');
        // $this->load->view('templates/sidebar');
        // $this->load->view('templates/edit', $data);
        // $this->load->view('templates/footer');
    }
}
