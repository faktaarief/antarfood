<?php
class Home_m extends CI_Model
{

    function ambil_produk()
    {
        $hasil = $this->db->get('tb_produk');
        return $hasil->result_array();
    }
}
