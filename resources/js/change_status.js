$(document).ready(function(){
    $('.btn-siap').click(function(){
        var id_supplier = $(this).data('id_supplier');
        var id_pesanan = $(this).data('id_pesanan');
        var status = "Kurir menuju toko anda";

        window.location.href = "/changeStatusBySupplier/" + id_supplier + '/'+ id_pesanan + '/' + status;
    });

    $('.btn-kirim').click(function(){
        var id_supplier = $(this).data('id_supplier');
        var id_pesanan = $(this).data('id_pesanan');
        var status = "Dikirim oleh Kurir";  

        window.location.href = "/changeStatusBySupplier/" + id_supplier + '/'+ id_pesanan + '/' + status;
    });
    $('.btn-sampai').click(function(){
        var id_user = $(this).data('id_user');
        var id_pesanan = $(this).data('id_pesanan');
        var status = "Sampai";

        window.location.href = "/changeStatusByKonsumen/" + id_user + '/'+ id_pesanan + '/' + status;

    });

    $('.btn-nilai').click(function(){
        var id_pesanan = $(this).data('id_pesanan');
        var id_user = $(this).data('id_user');
        var id_produk = $(this).data('id_produk');

        $('#id_pesanan').val(id_pesanan);
        $('#id_user').val(id_user);
        $('#id_produk').val(id_produk);
    });
    
});