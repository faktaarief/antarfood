<?php
class Home_m extends CI_Model
{

    function ambil_produk($limit, $start)
    {
        $hasil = $this->db->get('tb_produk', $limit, $start);

        return $hasil->result_array();
    }
}
