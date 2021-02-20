<?php

class Rrn extends CI_Controller
{
    public function index()
    {
        check_not_login();
        $this->template->load('template', 'trans_rrn/rrn');
    }

    public function search_rrn()
    {
        $trans_date = $this->input->post('trans_date');
        $rrn        = $this->input->post('rrn');
        $value      = $this->input->post('check');

        if ($trans_date == "") {
            echo "<script>
            alert('Pilih Transaction Date')
            window.location='" . site_url('rrn') . "'
            </script>";
        } elseif ($value == "") {
            echo "<script>
            alert('Pilih Message Type')
            window.location='" . site_url('rrn') . "'
            </script>";
        } elseif ($rrn == "") {
            echo "<script>
            alert('Silahkan isi RRN dahulu')
            window.location='" . site_url('rrn') . "'
            </script>";
        }
        $checkbox   = implode(",", $value);

        $data = array(
            'trans_date'    => $trans_date,
            'rrn'           => $rrn,
            'checkbox'      => $checkbox
        );

        $data['payload'] = $this->iso_rpt->get_rrn($data)->result();
        $this->template->load('template', 'trans_rrn/rrn_result', $data);
    }
}
