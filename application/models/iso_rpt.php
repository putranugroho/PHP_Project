<?php

class Iso_rpt extends CI_Model
{
    public function get_rrn($data)
    {
        if ($data['checkbox'] == 'normal') {
            $this->db->from('iso_rpt');
            $this->db->where("mti BETWEEN '0200' AND '0210'");
            $this->db->where('bit37', $data['rrn']);
            // $this->db->where("waktu LIKE '%$trans_date%'");
            $payload = $this->db->get();
            return $payload;
        } elseif ($data['checkbox'] == 'reversal') {
            $this->db->from('iso_rpt');
            $this->db->where("mti BETWEEN '0400' AND '0410'");
            $this->db->where('bit37', $data['rrn']);
            // $this->db->where("waktu LIKE '%$trans_date%'");
            $payload = $this->db->get();
            return $payload;
        } else {
            $this->db->from('iso_rpt');
            $this->db->where("mti BETWEEN '0210' AND '0400'");
            $this->db->where('bit37', $data['rrn']);
            // $this->db->where("waktu LIKE '%$trans_date%'");
            $payload = $this->db->get();
            return $payload;
        }
    }
}
