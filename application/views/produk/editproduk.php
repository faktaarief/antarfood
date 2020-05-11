< <!--==============================================================-->
    <div class="page-wrapper">

        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-5">
                    <h2 class="page-title">Edit Produk</h2>
                    <div class="d-flex align-items-center">
                    </div>
                </div>
            </div>
        </div>
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>

                    <?= form_open_multipart('produk/editproduk'); ?>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama Produk</label>
                            <div class="col-sm-10">
                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $produk['id']; ?>">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Produk" value="<?= $produk['nama']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="harga" class="col-sm-2 col-form-label">Harga Produk</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga Produk" value="<?= $produk['harga']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi Produk</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" rows="8" value="<?= $produk['deskripsi']; ?>"></input>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image" value="<?= $produk['image']; ?>">
                            <label class="custom-file-label" for="image"><?= $produk['image']; ?></label>
                        </div>
                        <input type="hidden" name=gambarlama value="<?= $produk['image']; ?>">
                    </div>
                    <div class="modal-footer">
                        <a href="<?= base_url('produk'); ?>" class="btn btn-danger"> Cancel</a>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>