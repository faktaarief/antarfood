// data-toggle="modal" data-target="#exampleModal"
//let quantity = $("#" + produk_id).val();
// 	$.ajax({
// 		url: "<?php echo base_url();?>index.php/cart/add_to_cart",
// 		method: "POST",
// 		data: {
// 			produk_id: produk_id,
// 			produk_nama: produk_nama,
// 			produk_harga: produk_harga,
// 			quantity: quantity,
// 		},
// 		success: function (data) {
// 			$("#detail_cart").html(data);
// 		},
// 	});
// });

// // Load shopping cart
// $("#detail_cart").load("<?php echo base_url();?>index.php/cart/load_cart");

// //Hapus Item Cart
// $(document).on("click", ".hapus_cart", function () {
// 	var row_id = $(this).attr("id"); //mengambil row_id dari artibut id
// 	$.ajax({
// 		url: "<?php echo base_url();?>cart/hapus_cart",
// 		method: "POST",
// 		data: { row_id: row_id },
// 		success: function (data) {
// 			$("#detail_cart").html(data);
// 		},
// 	});
