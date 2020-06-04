<?php

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('home_m');
    }
    function index()
    {
        $data['title'] = 'Home';
        $data['web'] = 'Antar Food';
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // $data['data'] = $this->home_m->ambil_produk();
        // $this->load->view('home', $data);

         //konfigurasi pagination
         $config['base_url'] = site_url('/'); //site url
         $config['total_rows'] = $this->db->count_all('tb_produk'); //total row
         $config['per_page'] = 9;  //show record per halaman
         $config["uri_segment"] = 1;  // uri parameter
         $choice = $config["total_rows"] / $config["per_page"];
         $config["num_links"] = floor($choice);
  
         // Membuat Style pagination untuk BootStrap v4
         $config['first_link']       = 'First';
         $config['last_link']        = 'Last';
         $config['next_link']        = 'Next';
         $config['prev_link']        = 'Prev';
         $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
         $config['full_tag_close']   = '</ul></nav></div>';
         $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
         $config['num_tag_close']    = '</span></li>';
         $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
         $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
         $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
         $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['prev_tagl_close']  = '</span>Next</li>';
         $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
         $config['first_tagl_close'] = '</span></li>';
         $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['last_tagl_close']  = '</span></li>';
  
         $this->pagination->initialize($config);
         $data['page'] = ($this->uri->segment(1)) ? $this->uri->segment(1) : 0;

         //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
         $data['data'] = $this->home_m->ambil_produk($config["per_page"], $data['page']);
         $this->db;           
  
         $data['pagination'] = $this->pagination->create_links();
  
         //load view mahasiswa view
         $this->load->view('home', $data);
    }
}
