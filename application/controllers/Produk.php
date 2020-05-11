<?php

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = 'Daftar Produk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->db->get('tb_produk')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('produk/index', $data);
        $this->load->view('templates/footer', $data);
    }
    public function tambahproduk()
    {
        $this->load->model('Produk_model');
        $data['title'] = 'Daftar Produk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->db->get('tb_produk')->result_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('produk/index', $data);
            $this->load->view('templates/footer', $data);
        } else {

            $config['allowed_types'] = 'gif|jpeg|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/produk';
            $image = $_FILES['image'];

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                echo $this->upload->display_errors();
            } else {
                $image = $this->upload->data('file_name');
            }

            $data = [
                'nama' => $this->input->post('nama'),
                'harga' => $this->input->post('harga'),
                'image' => $image,
                'deskripsi' => $this->input->post('deskripsi'),
                'date_created' => time()
            ];

            $this->db->insert('tb_produk', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Produk ditambahkan!</div>');
            redirect('produk');
        }
    }
    public function deleteproduk($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_produk');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Produk telah dihapus!
        </div>');
        redirect('produk');
    }
    public function editproduk()
    {
        $data['title'] = 'Ubah Produk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->db->get_where('tb_produk', ['id' => $this->uri->segment(3)])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('produk/editproduk', $data);
            $this->load->view('templates/footer', $data);
        } else {

            $image = $_FILES['image']['name'];
            if ($image) {
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/produk';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('image')) {
                    echo $this->upload->display_errors();
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Detail Produk telah diubah!</div>');
                    redirect('produk');
                } else {
                    $image = $this->upload->data('file_name');
                }
            } else {
                $image = $this->input->post('gambarlama');
            }
                $data = [
                    'nama' => $this->input->post('nama'),
                    'harga' => $this->input->post('harga'),
                    'image' => $image,
                    'deskripsi' => $this->input->post('deskripsi')
                ];

                $this->db->where('id', $this->input->post('id'));
                $this->db->update('tb_produk', $data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Detail Produk telah diubah!</div>');
                redirect('produk');
        }
    }
    public function detailproduk($id)
    {
        $data['title'] = 'Detail Produk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->db->get_where('tb_produk', ['id' => $id])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('produk/detailproduk', $data);
        $this->load->view('templates/footer', $data);
    }
}
