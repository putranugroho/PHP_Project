<?php

class Rrn extends CI_Controller
{
    public function index()
    {
        check_not_login();
        $this->template->load('template', 'rrn');
    }

    public function search_rrn()
    {
        // $trans_date = $this->input->post('trans_date');
        $rrn        = $this->input->post('rrn');
        $value      = $this->input->post('check');
        $checkbox   = implode(",", $value);

        $data = array(
            // 'trans_date'    => $trans_date,
            'rrn'           => $rrn,
            'checkbox'      => $checkbox
        );

        $this->load->model('iso_rpt');
        $data['payload'] = $this->iso_rpt->get_rrn($data)->result();
        $this->template->load('template', 'rrn', $data);
        // foreach ($data['payload'] as $row) {
        //     echo $row['id'];
        //     echo ",";
        //     echo $row['mti'];
        //     echo ",";
        //     echo $row['bit2'];
        //     echo ",";
        //     echo $row['bit37'];
        //     echo "|";
        // }
    }
}
