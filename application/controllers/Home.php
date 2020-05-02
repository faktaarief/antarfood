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

        $data['data'] = $this->home_m->ambil_produk();
        $this->load->view('home', $data);
    }
    function tambah_keranjang()
    {
        $data =
            [
                'id' => $this->input->post('id'),
                'nama' => $this->input->post('nama'),
                'harga' => $this->input->post('harga'),
                'image' => $this->input->post('image')
            ];
        $this->cart->insert($data);
        echo $this->show_cart(); //tampilkan cart setelah added
    }

    function show_cart()
    { //Fungsi untuk menampilkan Cart
        $output = '';
        $qty = 0;
        foreach ($this->cart->contents() as $items) {
            $qty++;
            $output .= '
                    <tr>
                        <td>' . $items["id"] . '</td>
                        <td>' . $items["nama"] . '</td>
                        <td>' . $items["harga"] . '</td>
                    </tr>
                ';
        }
        return $output;
    }
}
