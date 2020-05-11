       <!-- ============================================================== -->
       <div class="page-wrapper">
           <!-- ============================================================== -->
           <!-- Bread crumb and right sidebar toggle -->
           <!-- ============================================================== -->
           <div class="page-breadcrumb">
               <div class="row align-items-center">
                   <div class="col-5">
                       <h2 class="page-title">Daftar Produk</h2>
                       <div class="d-flex align-items-center">
                       </div>
                   </div>
               </div>
           </div>
           <!-- Begin Page Content -->
           <div class="container-fluid">



               <div class="row">
                   <div class="col-lg-9">
                       <?php if (validation_errors()) : ?>
                           <div class="alert alert-danger" role="alert">
                               <?= validation_errors(); ?>
                           </div>
                       <?php endif; ?>
                       <?= $this->session->flashdata('pesan'); ?>

                       <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newprodukmodal">Tambah Produk</a>
                       <table class=" table table-hover">
                           <thead>
                               <tr>
                                   <th scope="col">#</th>
                                   <th scope="col">Nama Produk</th>
                                   <th scope="col">Harga Produk</th>
                                   <th scope="col">Action</th>
                               </tr>
                           </thead>
                           <tbody>
                               <?php $i = 1; ?>
                               <?php foreach ($produk as $p) : ?>
                                   <tr>
                                       <th scope="row"><?= $i; ?></th>
                                       <td><?= $p['nama']; ?></td>
                                       <td>Rp. <?= number_format($p['harga'], 0, ',', ','); ?>,-</td>
                                       <!-- <td><img src="<?= base_url('assets/img/') . $p['image']; ?>" class="img-thumbnail" width="60px"> -->

                                       <td>
                                           <a href="<?= base_url('produk/detailproduk/'); ?><?= $p['id']; ?> " class="btn btn-success btn-sm mdi mdi-information-outline"> Detail Produk</a>
                                           <a href="<?= base_url('produk/editproduk/'); ?><?= $p['id']; ?> " class="btn btn-primary btn-sm fas fa-edit"> Edit Produk</a>
                                           <a href="<?= base_url('produk/deleteproduk/'); ?><?= $p['id']; ?> " onclick="return confirm('Are You Sure?');" class="btn btn-danger btn-sm fas fa-trash-alt"> Hapus Produk</a>
                                       </td>
                                   </tr>
                                   <?php $i++; ?>
                               <?php endforeach; ?>

                           </tbody>
                       </table>
                   </div>
               </div>
           </div>
       </div>



       <!-- Modal -->
       <div class="modal fade" id="newprodukmodal" tabindex="-1" role="dialog" aria-labelledby="newprodukmodalLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="newprodukmodalLabel">Tambah Produk</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <?= form_open_multipart('produk/tambahproduk'); ?>
                   <div class="modal-body">
                       <div class="form-group">
                           <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Produk">
                       </div>
                       <div class="form-group">
                           <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga Produk">
                       </div>
                       <div class="form-group">
                           <label for="deskripsi">Deskripsi Produk</label>
                           <input type="text" class="form-control" id="deskripsi" name="deskripsi" rows="8"></input>
                       </div>
                       <div class="custom-file">
                           <input type="file" class="custom-file-input" id="image" name="image">
                           <label class="custom-file-label" for="image">Choose file</label>
                       </div>
                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                       <button type="submit" class="btn btn-primary">Tambah</button>
                   </div>
                   <?= form_close(); ?>
               </div>
           </div>
       </div>