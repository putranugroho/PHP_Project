<?php

class Iso_rpt extends CI_Model
{

    public function show_card_rrn($data)
    {
        $this->db->from('iso_rpt');
        $this->db->where('mti', '0200');
        $this->db->where('bit2', $data['card']);
        $this->db->like("waktu", $data['trans_date']);
        $payload = $this->db->get();
        if (count($payload->result()) == 0) {
            $this->db->from('iso_rpt_old');
            $this->db->where('mti', '0200');
            $this->db->where('bit2', $data['card']);
            $this->db->like("waktu", $data['trans_date']);
            $payload = $this->db->get();
        }
        return $payload;
    }

    public function get_rrn($data)
    {
        if ($data['checkbox'] == 'normal') {
            $this->db->from('iso_rpt');
            $this->db->where("mti BETWEEN '0200' AND '0210'");
            $this->db->where('bit37', $data['rrn']);
            $this->db->like("waktu", $data['trans_date']);
            $payload = $this->db->get();
            if (count($payload->result()) == 0) {
                $this->db->from('iso_rpt_old');
                $this->db->where("mti BETWEEN '0200' AND '0210'");
                $this->db->where('bit37', $data['rrn']);
                $this->db->like("waktu", $data['trans_date']);
                $payload = $this->db->get();
            }
            return $payload;
        } elseif ($data['checkbox'] == 'reversal') {
            $this->db->from('iso_rpt');
            $this->db->where("mti BETWEEN '0400' AND '0410'");
            $this->db->where('bit37', $data['rrn']);
            $this->db->like("waktu", $data['trans_date']);
            $payload = $this->db->get();
            if (count($payload->result()) == 0) {
                $this->db->from('iso_rpt_old');
                $this->db->where("mti BETWEEN '0400' AND '0410'");
                $this->db->where('bit37', $data['rrn']);
                $this->db->like("waktu", $data['trans_date']);
                $payload = $this->db->get();
            }
            return $payload;
        } else {
            $this->db->from('iso_rpt');
            $this->db->where("mti BETWEEN '0210' AND '0400'");
            $this->db->where('bit37', $data['rrn']);
            $this->db->like("waktu", $data['trans_date']);
            $payload = $this->db->get();
            if (count($payload->result()) == 0) {
                $this->db->from('iso_rpt_old');
                $this->db->where("mti BETWEEN '0210' AND '0400'");
                $this->db->where('bit37', $data['rrn']);
                $this->db->like("waktu", $data['trans_date']);
                $payload = $this->db->get();
            }
            return $payload;
        }
    }
}
