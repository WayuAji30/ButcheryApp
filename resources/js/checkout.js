$(document).ready(function(){
    var listproduk = $('.list_produk').length;

    var subtotal = $('#subtotal').val();
    var b_ongkir = $('#ongkir').text();
    var b_layanan = $('#layanan').text();
    var b_asuransi = $('#asuransi').text();
    var b_tambahan = $('#tambahan').text();   
    
    const total_harga = parseInt(subtotal.replace(/\./g, "")) + parseInt(b_ongkir.replace(/\./g, "")) + parseInt(b_layanan.replace(/\./g, "")) + parseInt(b_asuransi.replace(/\./g, "")) + parseInt(b_tambahan.replace(/\./g, "")); 

    $('#j-subtotal').text("Total Harga (" + listproduk + " Produk)")
    $('#rincian_subtotal').text(subtotal);
    $('#harga-total').text(total_harga.toLocaleString("id-ID"));

    $('.btn-mp').on('click',function(){
        const slug = $(this).data('slug');
        localStorage.setItem('metode_pembayaran', slug);
    });

    $('#motor').on('click',function(){
        var pengiriman = $('#motor #motor_j').text();

        $('#motor').removeClass('border-[#ccc]');
        $('#motor p').removeClass('text-[#999]');
        $('#motor').addClass('border-[#D10B05]');

        $('#mobil').removeClass('border-[#D10B05]');
        $('#mobil').addClass('border-[#ccc]');
        $('#mobil p').addClass('text-[#999]');

        localStorage.setItem('opsi_pengiriman',pengiriman);
    });
    
    $('#mobil').on('click',function(){
        var pengiriman = $('#mobil #mobil_j').text();

        $('#motor').addClass('border-[#ccc]');
        $('#motor p').addClass('text-[#999]');
        $('#motor').removeClass('border-[#D10B05]');

        $('#mobil').addClass('border-[#D10B05]');
        $('#mobil').removeClass('border-[#ccc]');
        $('#mobil p').removeClass('text-[#999]');

        localStorage.setItem('opsi_pengiriman',pengiriman);
    });

    $('#buat-pesanan').click(function(){
        var id_user = $(this).data('id_user');

        var selectedItems = [];
        $('.list_produk').each(function(){
            var list_produk = $(this).closest('.list_produk');
            var id_user = list_produk.find('#id_user').val();
            var id_produk = list_produk.find('#id_produk').val();
            var id_supplier = list_produk.find('#id_supplier').val();
            var foto_produk = list_produk.find('#foto_produk').val();
            var namaProduk = list_produk.find('#nama_produk').text();
            var varianProduk = list_produk.find('#varian').text();
            var harga = list_produk.find('#harga_barang').text();
            var qty = list_produk.find('#qty').text();
            selectedItems.push({
                id_user : id_user,
                id_supplier : id_supplier,
                id_produk :id_produk,
                foto: foto_produk,
                nama_produk : namaProduk,
                varian : varianProduk,
                harga : harga,
                qty : qty
            });
        });
        
        var alamatPengiriman = $('#alamat-user').text();
        var metode_pembayaran = localStorage.getItem('metode_pembayaran');
        var opsi_pengiriman = localStorage.getItem('opsi_pengiriman');
        var status = 'belum bayar';

        // Mengubah array menjadi JSON string
        var selectedItemsJson = JSON.stringify(selectedItems);

        window.location.href = '/store_orders/' + encodeURIComponent(selectedItemsJson) + '/' + opsi_pengiriman + '/' + b_ongkir + '/' + b_layanan + '/' + b_asuransi + '/' + b_tambahan + '/' + subtotal + '/' + total_harga + '/' + status + '/' + alamatPengiriman;
 
    });

});