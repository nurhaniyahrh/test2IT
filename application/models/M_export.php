<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_export extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getAll()
    {
        $this->db->select('*');
        $this->db->from('hasilakhir');
        $this->db->order_by('nisn', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    function check()
    {
        $this->db->select('*');
        $this->db->from('kuncijawaban');
        $this->db->where('no_soal',1);
        $a=$this->db->get();

        $this->db->select('soal_1');
        $this->db->from('identitas');
        $b=$this->db->get();

        if ($a == $b){
            
            $this->db->insert_batch();
        }
    }

}