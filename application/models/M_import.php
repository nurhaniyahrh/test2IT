<?php

class M_import extends CI_Model{

    function insert($data){
        $this->db->insert_batch('identitas', $data);

    }

    function insertAnswer($data){
        $this->db->insert_batch('kuncijawaban', $data);

    }

    function insertHasil($data){
        $this->db->insert_batch('hasilakhir', $data);

    }

}