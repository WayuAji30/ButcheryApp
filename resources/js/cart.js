$(document).ready(function(){
   // Memanggil fungsi perbaruiTotalHarga() saat halaman dimuat
   perbaruiTotalHarga();

   // Menggunakan event delegation untuk mengelola checkbox
   $(document).on('change', '.checkbox', function() {
       perbaruiJumlahProduk();
       perbaruiTotalHarga();
   });

   // Fungsi untuk menghitung jumlah produk yang dicentang
   function perbaruiJumlahProduk() {
       const jumlahProduk = $('.checkbox:checked').length;
       $('#jumlah-produk').text(jumlahProduk);
   }

   // Fungsi untuk menghitung total harga
   function hitungTotalHarga() {
       let total = 0;
       $('.checkbox:checked').each(function() {
           const harga = $(this).data('harga');
           const qty = $(this).data('qty');
           total += harga * qty;
       });
       return total;
   }

   // Fungsi untuk memperbarui tampilan total harga
   function perbaruiTotalHarga() {
       const totalHarga = hitungTotalHarga();
       $('#harga-total').text(totalHarga.toLocaleString("id-ID"));
   }

   // Tombol tambah jumlah barang
    $(document).on('click', '#plus', function() {
        const cartItem = $(this).closest('.cart-item');
        const qtyElement = cartItem.find('.checkbox');
        const jumlahBarangElement = cartItem.find('#jumlah-barang');

        const qty = parseInt(qtyElement.data('qty')) + 1;
        qtyElement.data('qty', qty);

        const harga = parseFloat(qtyElement.data('harga'));
        const totalHargaItem = harga * qty;

        jumlahBarangElement.text(qty);
        perbaruiTotalHarga();
    });

    // Tombol kurangi jumlah barang
    $(document).on('click', '#mines', function() {
        const cartItem = $(this).closest('.cart-item');
        const qtyElement = cartItem.find('.checkbox');
        const jumlahBarangElement = cartItem.find('#jumlah-barang');

        const qty = parseInt(qtyElement.data('qty'));
        if (qty > 1) {
            qtyElement.data('qty', qty - 1);

            const harga = parseFloat(qtyElement.data('harga'));
            const totalHargaItem = harga * (qty - 1);

            jumlahBarangElement.text(qty - 1);
            perbaruiTotalHarga();
        }
    });

   // Tombol beli
   $('#btn-beli').click(function () {
    var id_user = $(this).data('id_user');
    var id_produk = $(this).data('id_produk');
    var id_supplier = $(this).data('id_supplier');
    var harga_total = $('#harga-total').text();
    var foto = $('#foto_cart_items').val();


    var selectedItems = [];
    $('.checkbox:checked').each(function () {
        var cartItem = $(this).closest('.cart-item');
        var nama_produk = cartItem.find('#nama_produk').text();
        var varian = cartItem.find('#varian').text();
        var harga = cartItem.find('#harga').text();
        var qty = cartItem.find('#jumlah-barang').text();
        var note = cartItem.find('#note').val();
        selectedItems.push({
            nama_produk: nama_produk,
            varian: varian,
            harga: harga,
            qty: qty,
            note: note,
        });
    });

    // Mengubah array menjadi JSON string
    var selectedItemsJson = JSON.stringify(selectedItems);

    window.location.href = '/store_checkout/' + id_user + '/' + id_produk + '/' + id_supplier + '/' + encodeURIComponent(selectedItemsJson) + '/' + harga_total + '/' + foto;
});


});
