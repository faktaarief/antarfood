       <!-- ============================================================== -->
       <div class="page-wrapper">
           <!-- ============================================================== -->
           <!-- Bread crumb and right sidebar toggle -->
           <!-- ============================================================== -->
           <div class="page-breadcrumb">
               <div class="row align-items-center">
                   <div class="col-5">
                       <h2 class="page-title"><?= $title; ?></h2>
                       <div class="d-flex align-items-center">
                       </div>
                   </div>
               </div>
           </div>
           <!-- Begin Page Content -->
           <div class="container-fluid">
               <div class="row">
                   <div class="col-lg-9">
                       <div class="card mb-3" style="max-width: 540px;">
                           <div class="row no-gutters">
                               <div class="col-md-4">
                                   <img src="<?= base_url('assets/img/produk/') . $produk['image']; ?>" class="card-img" alt="...">
                               </div>
                               <div class="col-md-8">
                                   <div class="card-body">
                                       <h3 class="card-title"><?= $produk['nama']; ?></h3>
                                       <p class="card-text"><?= $produk['deskripsi']; ?></p>
                                       <p class="card-text"><small class="text-muted">Ditambah pada <?= date('d F Y', $produk['date_created']); ?></small></p>
                                       <a href="<?= base_url('produk'); ?>" class="btn btn-warning btn-sm fas fa-edit"> Kembali</a>
                                       <a href="<?= base_url('produk/editproduk/'); ?><?= $produk['id']; ?> " class="btn btn-primary btn-sm fas fa-edit"> Edit Produk</a>
                                   </div>
                               </div>
                           </div>
                       </div>