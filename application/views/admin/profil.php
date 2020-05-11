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
            <div class="col-lg">


                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->
                    <!-- Row -->
                    <div class="row">
                        <!-- Column -->
                        <div class="col-lg-4 col-xlg-3 col-md-5">
                            <div class="card">
                                <div class="card-body">
                                    <?= $this->session->flashdata('pesan'); ?>
                                    <div class="m-t-30"> <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="rounded-circle" width="150" />
                                        <br>
                                        <br>
                                        <h6 class="card-subtitle">Administrator</h6>
                                        <h4 class="card-title m-t-10"><?= $user['name']; ?></h4>
                                        <small class="text-muted">Email address </small>
                                        <h6><?= $user['email']; ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-8 col-xlg-9 col-md-7">
                            <div class="card">

                                <div class="card-body">
                                    <?php if (validation_errors()) : ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?= validation_errors(); ?>
                                        </div>
                                    <?php endif; ?>
                                    <?= form_open_multipart('admin/editprofil'); ?>
                                    <div class="form-group">
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="hidden" name="id" id="id" value="<?= $user['id']; ?>">
                                            <input type="text" value="<?= $user['name']; ?>" class="form-control form-control-line" name="name">
                                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" value="<?= $user['email']; ?>" class="form-control form-control-line" name="email" id="email" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Foto Profil</label>
                                        <div class="col-md-12">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image" name="image" value="<?= $user['image']; ?>">
                                                <label class="custom-file-label" for="image"><?= $user['image']; ?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name=gambarlama value="<?= $user['image']; ?>">

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success">Update Profile</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                    </div>
                    <!-- Row -->
                    <!-- ============================================================== -->
                    <!-- End PAge Content -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                </div>
            </div>
        </div>
    </div>
</div>