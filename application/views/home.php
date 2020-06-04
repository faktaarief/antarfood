<!doctype html>
<html lang="en">
<!-- color
#E36E00 -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#E36E00">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url();  ?>assets/css/home.css">
    <!-- Custom CSS -->
    <link href="<?= base_url('assets'); ?>/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url('assets'); ?>/dist/css/style.min.css" rel="stylesheet">
    <link href="<?= base_url('assets'); ?>/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.14.0/dist/sweetalert2.min.css">

    <title><?= $title; ?></title>
</head>

<body style="max-width: 1020px; background-image: url('https://telegra.ph/file/ff540bb9329b3150deb29.png'); background-color: #F5F5F5; background-size: 214px 214px; background-attachment: fixed;" class="mx-auto shadow bg-white rounded">

<div class="bg-white">
    <!-- Navigation -->
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow mb-5 bg-white rounded mx-auto" style="max-width: 1020px; border-bottom: 5px solid #E36E00; !important">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?= base_url('assets/img/produk/logo.png'); ?>" alt="logo" width="50px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#menu">Menu</a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link" href="#contact">Kontak</a>
                        </li>
                        <!-- Button trigger modal -->
                        <a class="shopping-cart lihat-cart button-keranjang mx-auto mt-2" data-toggle="modal" data-target="#exampleModal" disabled>
                            <i class="fas fa-shopping-cart fa-lg" style="color: #E36E00;"></i>&nbsp;<span class="badge badge-pill badge-danger qty-keranjang font-bold" id="jumlah-cart">0</span>
                        </a>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

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
                        <div class="carousel-inner" style="border-radius: 12px;" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="<?= base_url('assets/img/produk/carousel-1.jpg'); ?>" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="<?= base_url('assets/img/produk/carousel-2.jpg'); ?>" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="<?= base_url('assets/img/produk/carousel-3.jpg'); ?>" alt="Third slide">
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

                    <div class="row" id="menu">
                        <?php foreach ($data as $produk) : ?>

                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <div class="panel-body" style="padding:4px; text-align:center; overflow:hidden; ">
                                        <a href="#"><img style="height: 300px; width: 300px; padding: 2px; border-radius: 12px;" src="<?= base_url('assets/img/produk') . '/' . $produk['image']; ?>" alt=""></a>
                                    </div>


                                    <div class="card-body">
                                        <h4 class="card-title text-center">
                                            <?= $produk['nama'] ?>
                                        </h4>
                                        <h5 class="ml-2 card-harga">Rp <?= number_format($produk['harga'], 0, '.', '.'); ?></h5>
                                        <br>
                                        <p class="card-text ml-2"><?= $produk['deskripsi']; ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col">
                                                <div class="input-group">
                                                    <a class="minus"><i class="far fa-minus-square fa-lg" style="font-size: 30px; margin:6px 6px 0 0; color: #F1BC32;"></i></a>
                                                    <input type="number" min="1" class="form-control kuantiti" value="1" aria-describedby="basic-addon1" id="<?= $produk['id'] ?>">
                                                    <a class="plus"><i class="far fa-plus-square fa-lg" style="font-size: 30px; margin:6px 0 0 6px; color: #F1BC32;"></i></a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <!-- <small class="text-muted">Masukan Keranjang</small> -->
                                                <button type="button" class="masuk-keranjang btn btn-sm p-2" data-id="<?= $produk['id'] ?>" data-nama="<?= $produk['nama'] ?>" data-harga="<?= $produk['harga'] ?>" data-image="<?= $produk['image'] ?>" style="border: 1px solid #E36E00; color: #E36E00; border-radius: 8px;">Masukan Keranjang</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- /.row -->
                    <?php echo $pagination; ?>
                </div>
                <!-- /.col-lg-9 -->

            </div>
            <!-- /.row -->

        </div>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-3" style="background-color: #E36E00;">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="row row-bawah">
                        <img src="<?= base_url('assets/img/produk/logo-white.png'); ?>" alt="logo" width="120px">
                        <span class="d-inline teks-bawah">
                            <i class="far fa-building fa-lg"></i> &nbsp; Office Jalan Raya Bogor - Jakarta KM 46 <br>
                            <i id="contact" class="far fa-envelope fa-lg mt-4"></i> &nbsp; marketing@antarfood.com <br>
                            <i class="fas fa-phone-square-alt fa-lg mt-4"></i> &nbsp; 0812 - 8283 - 5477
                        </span>
                </div>
                <p class="m-0 mt-3 text-center text-white">&copy; AntarFood 2020 [dibuat] dengan ❤</p>
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
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>assets/js/home.js"></script>
    <script src="<?= base_url() ?>assets/js/checkout.js"></script>
    <script src="https://kit.fontawesome.com/a906198944.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.14.0/dist/sweetalert2.min.js"></script>
    <script>
        let cek = $('.qty-keranjang').html();
        if(cek <= 0)
            $('.qty-keranjang').addClass('d-none');
        else {
            $('.qty-keranjang').removeClass('d-none');
            $('.button-keranjang').removeAttr('disabled');
        }

        $('.plus').each(function() {
            $(this).on('click', plus);
        });

        $('.minus').each(function() {
            $(this).on('click', minus);
        });

        function plus(event) {
            let getVal = event.currentTarget.previousElementSibling;
            let incVal = parseInt(getVal.value) + parseInt(1);
            getVal.value = parseInt(incVal);
        }

        function minus(event) {
            let getVal = event.currentTarget.nextElementSibling;

            if(getVal.value <= 1) {
                getVal.value = parseInt(1);
            } else {
                let incVal = parseInt(getVal.value) - parseInt(1);
                getVal.value = parseInt(incVal);
            }

            
        }
    </script>
</body>

</html>