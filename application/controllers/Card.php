<?php

class Card extends CI_Controller
{
    public function index()
    {
        check_not_login();
        $this->template->load('template', 'card');
    }

    public function search_card()
    {
        $trans_date = $this->input->post('trans_date');
        $card       = $this->input->post('card');
        $value      = $this->input->post('check');

        if ($trans_date == "") {
            echo "<script>
            alert('Pilih Transaction Date')
            window.location='" . site_url('card') . "'
            </script>";
        } elseif ($value == "") {
            echo "<script>
            alert('Pilih Message Type')
            window.location='" . site_url('card') . "'
            </script>";
        } elseif ($card == "") {
            echo "<script>
            alert('Silahkan isi Card Number dahulu')
            window.location='" . site_url('card') . "'
            </script>";
        }
        $checkbox   = implode(",", $value);

        $select_rrn = array(
            'trans_date'    => $trans_date,
            'card'          => $card,
            'checkbox'      => $checkbox
        );

        $this->session->set_flashdata($select_rrn);
        $data['payload'] = $this->iso_rpt->show_card_rrn($card)->result();
        $this->template->load('template', 'card_pilih', $data);
    }

    public function search_card_rrn($rrn)
    {
        $trans_date = $this->session->flashdata('trans_date');
        $checkbox = $this->session->flashdata('checkbox');

        $data = array(
            'trans_date'    => $trans_date,
            'rrn'           => $rrn,
            'checkbox'      => $checkbox
        );

        $data['payload'] = $this->iso_rpt->get_rrn($data)->result();
        if (count($data['payload']) > 0) {
            $this->template->load('template', 'card_result', $data);
        } else {
            echo "<script>
            alert('Data transaksi tidak tersedia')
            window.location='" . site_url('card') . "'
            </script>";
        }
    }
}
