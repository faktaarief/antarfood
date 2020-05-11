let array = [];
// let array2 = [{}];
let z = "cart";
var isi = JSON.parse(localStorage.getItem(z));
//load isi cart ketika baru membuka web
let quantityCart = JSON.parse(localStorage.getItem(z));
if (quantityCart) {
	$("#jumlah-cart").html(quantityCart.length);
}

function simpan(array1) {
	localStorage.setItem(z, JSON.stringify(array1));
	//thumbnail isi cart
	let quantityCart = JSON.parse(localStorage.getItem(z));
	if (quantityCart) {
		$("#jumlah-cart").html(quantityCart.length);
	}
	return isi = JSON.parse(localStorage.getItem(z));
}

function deleteMemberData(id) {
	var id = id;
	var storageUsers = JSON.parse(localStorage.getItem(z));
	var newData = [];
	newData = storageUsers.filter(function (item, index) {
		return item.id != id;
	});
	simpan(newData);
	var isi = JSON.parse(localStorage.getItem(z));
	$(".modal-cart").html("");
	for (var item in isi) {
		var result = isi[item];
		tampil(result);
		result.total = isi
			.map((item) => item.subtotal)
			.reduce((prev, next) => prev + next);
	}
	return isi = JSON.parse(localStorage.getItem(z));
}

$(".masuk-keranjang").click(function () {
	let cart = {};
	cart.id = $(this).data("id");
	cart.nama = $(this).data("nama");
	cart.harga = $(this).data("harga");
	cart.image = $(this).data("image");
	// cart.quantity = $("#quantity").val();
	var quantity = document.querySelectorAll(".kuantiti");
	for (var i = 0; i < quantity.length; i++) {
		if (quantity[i].id == cart.id) {
			cart.quantity = quantity[i].value;
			cart.subtotal = cart.quantity * cart.harga;
		}
	}

	//cek item dalam keranjang, tidak boleh ada double item
	if (isi) {
		for (var i = 0; i < isi.length; i++) {
			if (isi[i].id == cart.id) {
				$("#modalDouble").modal({
					backdrop: true,
				});
				return false;
			}
		}
	}
	if (isi) {
		//cek value local dulu, kalau ada isinya ambil local storage yang ada lalu tambahkan value yang baru
		isi.push(cart);
		simpan(isi);
	} else {
		array.push(cart);
		simpan(array);
	}
});

$(".lihat-cart").click(function () {
	$(".modal-cart").html("");
	for (var item in isi) {
		var result = isi[item];
		tampil(result);
		result.total = isi
			.map((item) => item.subtotal)
			.reduce((prev, next) => prev + next);
	}
	$(".text-center h6").html(`Total Belanja Anda Adalah : Rp. ${result.total}`);
});

function tampil(result1) {
	$(".modal-cart").append(`
            <div class="card mb-2" style="">
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
                            <div class="row">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" value="${result1.quantity}" aria-label="Username" aria-describedby="basic-addon1" readonly>
                            </div>
                            <div class="row">
                                    <h6 class="card-text ml-3 mt-1">Sub Total : </h6>
                            </div>
                            <div class="row">
                                    <h6 class="card-text ml-3 mt-2">Rp. ${result1.subtotal}</h6>
                            </div>
                            <div class="row">
                                <button type="button" class="btn btn-danger ml-3 mt-4 modal-hapus" onclick="deleteMemberData(${result1.id})">Hapus Item</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            `);
}
