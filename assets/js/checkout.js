(function checkout() {

    let getCart;
    let myOrder = [];

    function init() {
        getCart = JSON.parse(localStorage.getItem('cart'));
        
        if(!!getCart == null) {
            console.log('Keranjang kosong');
        } else {

            $('.checkout').click(function () {

                const nama = $('#nama').val();
                const nomor = $('#notelp').val();
                const alamat = $('#alamat').val();

                if (nama == '') {
                    alert('Mohon Nama Diisi');
                } else if (nomor == '') {
                    alert('Mohon Nomor Telp Diisi');
                } else if (alamat == '') {
                    alert('Mohon Alamat Diisi');
                } else {                    
                    let nomorWa = 6281282835477;
                    let hr = `%0A----------------%0A`;
                    let single = `%0A`;
                    let br = '%0A%0A';

                    let templateOpeningChat = `Halo, berikut list orderan saya ${br} Order Item(s) ${hr}`;
                    myOrder.push(templateOpeningChat);

                    getCart = JSON.parse(localStorage.getItem('cart'));

                    getCart.forEach(listItem => {
                        let valNama = listItem.nama;
                        let valHarga = listItem.harga;
                        let valQty = listItem.quantity;
                        let valSubTotal = listItem.subtotal;
                        let valJoin = `${valNama} (${valQty} x ${convertToRupiah(valHarga)}) = ${convertToRupiah(valSubTotal)} ${hr}`;
                        myOrder.push(valJoin);
                    });
            
                    let getTotallHarga = $('.total-harga').html();
                    let valTotalHarga = `Total : ${convertToRupiah(getTotallHarga)}`; 

                    myOrder.push(valTotalHarga);

                    let dataPemesan = `Data Pemesan ${hr} Nama : ${nama}%0ANomor Telp : ${nomor}%0AAlamat : ${alamat}`;

                    myOrder.push(dataPemesan);

                    let valJoinAll = myOrder.join('');
                    let sendToWa = `https://wa.me/${nomorWa}?text=${valJoinAll}`;

                    window.location = sendToWa;

                    localStorage.clear();
                }
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