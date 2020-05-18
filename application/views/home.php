<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url();  ?>assets/css/home.css">
    <!-- Custom CSS -->
    <link href="<?= base_url('assets'); ?>/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url('assets'); ?>/dist/css/style.min.css" rel="stylesheet">
    <link href="<?= base_url('assets'); ?>/fontawesome/css/font-awesome.min.css" rel="stylesheet">

    <title><?= $title; ?></title>
</head>

<body>

    <!-- Navigation -->
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#"><?= $web ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary shopping-cart lihat-cart" data-toggle="modal" data-target="#exampleModal">
                            Keranjang <span class="badge badge-pill badge-danger" id="jumlah-cart">0</span>
                        </button>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!--==============================================================-->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- <aside class="left-sidebar bg-dark " data-sidebarbg="skin6"> -->
    <!-- Sidebar scroll-->
    <!-- <div class="scroll-sidebar "> -->
    <!-- Sidebar navigation-->
    <!-- <nav class="sidebar-nav" style="position: fixed;">
                <ul id="sidebarnav"> -->
    <!-- User Profile-->
    <!-- <li> -->
    <!-- User Profile-->

    <!-- <div class="user-profile d-flex no-block dropdown m-t-20">
                            <a class="navbar-brand" href="index.html"> -->
    <!-- Logo icon -->
    <!-- <div class="navbar-header" data-logobg="skin5"></div>
                                <b class="logo-icon">
                                    <h3>Antar Food</h3>
                                </b>
                            </a>
                        </div> -->

    <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Userdd">
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                            <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                        </div> -->


    <!-- End User Profile-->
    <!-- </li> -->
    <!-- <li class="p-15 m-t-10"><a href="javascript:void(0)" class="btn btn-block create-btn text-white no-block d-flex align-items-center"><i class="fa fa-plus-square"></i> <span class="hide-menu m-l-5">Create New</span> </a></li> -->
    <!-- User Profile-->
    <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('admin'); ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="" aria-expanded="false"><i class="mdi mdi-account-network"></i><span class="hide-menu">Profile</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('produk'); ?>" aria-expanded="false"><i class="mdi mdi-border-all"></i><span class="hide-menu">Produk</span></a></li>
                </ul>

            </nav> -->
    <!-- End Sidebar navigation -->
    <!-- </div> -->
    <!-- End Sidebar scroll-->
    <!-- </aside> -->
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->


    <!-- Page Content -->
    <div class="container">

        <div class="row">


            <!-- /.col-lg-3 -->

            <div class="col-lg">

                <div id="carouselExampleIndicators" class="carousel slide my-5" data-ride="carousel">


                    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    <div class="row">
                        <?php foreach ($data as $produk) : ?>

                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <div class="panel-body" style="padding:4px; text-align:center; overflow:hidden; ">
                                        <a href="#"><img style="height: 300px; width: 300px; padding: 2px;" src="<?= base_url('assets/img/produk') . '/' . $produk['image']; ?>" alt=""></a>
                                    </div>


                                    <div class="card-body">
                                        <h4 class="card-title text-center">
                                            <?= $produk['nama'] ?>
                                        </h4>
                                        <h5 class="ml-2 card-harga">Rp. <?= number_format($produk['harga'], 0, ',', ','); ?>,-</h5>
                                        <br>
                                        <p class="card-text ml-2"><?= $produk['deskripsi']; ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col">
                                                <!-- <small class="text-muted">Masukan Keranjang</small> -->
                                                <button type="button" class="masuk-keranjang btn btn-primary btn-sm" data-id="<?= $produk['id'] ?>" data-nama="<?= $produk['nama'] ?>" data-harga="<?= $produk['harga'] ?>" data-image="<?= $produk['image'] ?>">Masukan Keranjang</button>
                                            </div>
                                            <div class="col">
                                                <div class="input-group">
                                                    <input type="number" min="1" class="form-control kuantiti" value="1" aria-describedby="basic-addon1" id="<?= $produk['id'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.col-lg-9 -->

            </div>
            <!-- /.row -->

        </div>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-3 bg-dark">
        <div class="container">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; antarFood 2020</p>
            </div>
            <!-- /.container -->
    </footer>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Keranjang Anda</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- form user -->
                    <div class="col-lg-12">
                        <form action="">
                            <div class="form-group mt-2 mb-2">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama">
                            </div>
                            <div class="form-group mt-2 mb-2">
                                <label for="notelp">No Telp</label>
                                <input type="number" class="form-control" id="notelp">
                            </div>
                            <div class="form-group mt-2 mb-2">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" id="alamat" rows="3"></textarea>
                            </div>
                        </form>
                        <div class="modal-cart">
                        
                        </div>
                    </div>
                    <!-- endform -->
                </div>
                <div class="row modal-total mt-4">
                    <div class="col text-center">
                        <h6></h6>
                        <p class="total-harga d-none"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Lanjut Belanja</button>
                    <button type="button" class="btn btn-primary checkout">Lanjut Pembayaran</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Double Item -->
    <div class="modal fade" id="modalDouble" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pemberitahuan.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Anda Sudah Memasukan Item Ini Di Keranjang...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>assets/js/home.js"></script>
    <script src="<?= base_url() ?>assets/js/checkout.js"></script>
</body>

</html>