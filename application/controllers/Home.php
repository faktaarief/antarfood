<?php

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('home_m');
    }
    function index()
    {
        $data['title'] = 'Home';
        $data['web'] = 'Antar Food';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['data'] = $this->home_m->ambil_produk();
        $this->load->view('home', $data);
    }
}
