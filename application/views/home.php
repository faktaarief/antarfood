<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url();  ?>assets/css/home.css">

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
                            Cart <span class="badge badge-pill badge-danger" id="jumlah-cart">0</span>
                        </button>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- Page Content -->
    <div class="container">

        <div class="row">


            <!-- /.col-lg-3 -->

            <div class="col-lg-12">

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
                                <a href="#"><img class="card-img-top" src="<?= base_url('assets/img') . '/' . $produk['image']; ?>" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#"><?= $produk['nama'] ?></a>
                                    </h4>
                                    <h5><?= $produk['harga'] ?></h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                                </div>
                                <div class="card-footer">
                                    <!-- <small class="text-muted">Masukan Keranjang</small> -->
                                    <button type="button" class="masuk-keranjang btn btn-primary btn-sm mr-auto" data-id="<?= $produk['id'] ?>" data-nama="<?= $produk['nama'] ?>" data-harga="<?= $produk['harga'] ?>" data-image="<?= $produk['image'] ?>">Masukan Keranjang</button>
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
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Lanjut Belanja</button>
                    <button type="button" class="btn btn-primary">Lanjut Pembayaran</button>
                </div>
            </div>
        </div>
    </div>
    <div id="tampil"></div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.0.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            let array = [];
            let z = "cart"
            let isi = JSON.parse(localStorage.getItem('cart'));

            $(".masuk-keranjang").click(function() {
                // let click = 0;
                let cart = {};
                cart.id = $(this).data("id");
                cart.nama = $(this).data("nama");
                cart.harga = $(this).data("harga");
                cart.image = $(this).data("image");

                if (isi) {
                    //cek value local dulu, kalau ada isinya ambil local storage yang ada lalu tambahkan value yang baru
                    console.log(isi);
                    isi.push(cart);
                    simpan(isi)
                } else {
                    array.push(cart);
                    simpan(array);
                    console.log(array);

                }
            });

            function simpan(array1) {
                localStorage.setItem(z, JSON.stringify(array1));
            }

            let quantityCart = JSON.parse(localStorage.getItem('cart'))
            if (quantityCart) {
                $('#jumlah-cart').html(quantityCart.length)
            }

            let kontenCart = JSON.parse(localStorage.getItem('cart'))
            $('.lihat-cart').click(function() {
                $('.modal-body').html('')
                for (var item in kontenCart) {
                    var result = kontenCart[item]
                    tampil(result)
                }

                function tampil(result1) {
                    $('.modal-body').append(`
                    <div class="card mb-3" style="">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <img src="http://localhost/antarfood-master/assets/img/${result1.image}" class="img-thumbnail mt-3 ml-3">
                            </div>
                            <div class="col-md-4">
                                    <h5 class="card-title"> ${result1.nama}</h5>
                                        <div class="card-body">
                                            <h6 class="card-text">Rp. ${result1.harga}</h6>
                                        </div>
                            </div>
                            <div class="col-md-3 mt-3 kuantiti">
                                <div class="input-group mb-3">
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>Qty</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    </div>
                            </div>
                        </div>
                    </div>
                    `)
                }
            })
        })
    </script>
</body>

</html>