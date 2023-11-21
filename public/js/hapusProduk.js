$(document).ready(function(){
    $('.btn-hapus').click(function(){
        var id_produk = $(this).data('id_produk');

        $('#id_produk').val(id_produk);
    });

});