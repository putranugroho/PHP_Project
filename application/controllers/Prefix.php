<?php

class Prefix extends CI_Controller
{
    public function index()
    {
        check_not_login();
        $this->template->load('template', 'prefix/prefix');
    }

    public function search_bank()
    {
        $value      = "";
        $bankId     = $this->input->post('bank-id');
        $bankName   = $this->input->post('bank-name');
        $prefix     = $this->input->post('prefix');

        if ($bankId !== null) {
            $value = $bankId;
        } elseif ($bankName !== null) {
            $value = $bankName;
        } else {
            $value = $prefix;
        }
    }
}
