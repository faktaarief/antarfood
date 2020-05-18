(function checkout() {

    const getCart = JSON.parse(localStorage.getItem('cart'));
    let myOrder = [];

    function init() {
        if(getCart == null) {
            console.log('Keranjang kosong');
        } else {

            $('.checkout').click(function () {
                let nomorWa = 6281282835477;
                let hr = `%0A----------------%0A`;
                let br = '%0A%0A';

                let templateOpeningChat = `Halo, berikut list orderan saya ${br} Order Item(s) ${hr}`;
                myOrder.push(templateOpeningChat);

                getCart.forEach(listItem => {
                    let valNama = listItem.nama;
                    let valHarga = listItem.harga;
                    let valQty = listItem.quantity;
                    let valSubTotal = listItem.subtotal;
                    let valJoin = `${valNama} (${valQty} x ${convertToRupiah(valHarga)}) = ${valSubTotal}`;
                    myOrder.push(valJoin);
                });
        
                let valTotalHarga = $('.total-harga').html();
                myOrder.push(valTotalHarga);

                let valJoinAll = myOrder.join('');
                let sendToWa = `https://wa.me/${nomorWa}?text=${valJoinAll}`;

                window.location = sendToWa;

                localStorage.clear();
            });
        }
    }

    function convertToRupiah(angka) {
        var rupiah = '';
        var angkarev = angka.toString().split('').reverse().join('');
        for (var i = 0; i < angkarev.length; i++)
            if (i % 3 == 0) rupiah += angkarev.substr(i, 3) + '.';
        return 'Rp ' + rupiah.split('', rupiah.length - 1).reverse().join('');
    }

    init();
})();