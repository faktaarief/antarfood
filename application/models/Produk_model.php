<!-- <?php
        class produk_model extends CI_Model
        {
            public function upload_image()
            {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/produk/';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image')) {
                    return $this->upload->data("file_name");
                }
            }
        }
        ?> -->