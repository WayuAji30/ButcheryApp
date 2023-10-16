

$(document).ready(function(){
    var varian = $('#item-weight').text();
    localStorage.setItem('varian', varian);

    $('#low').on('click', function(){
        var varian = $(this).data('varian');
        var harga = $(this).data('price');

        if (localStorage.getItem('harga')) {
            localStorage.removeItem('harga'); // Hapus session yang lama
        }

        localStorage.setItem('varian', varian);
        localStorage.setItem('harga', harga);
    });

    $('#mid').on('click', function(){
        var varian = $(this).data('varian');
        var harga = $(this).data('price');

        // Periksa apakah session yang sebelumnya sudah ada
        if (localStorage.getItem('varian')) {
            localStorage.removeItem('varian'); // Hapus session yang lama
        }

        if (localStorage.getItem('harga')) {
            localStorage.removeItem('harga'); // Hapus session yang lama
        }

        localStorage.setItem('varian', varian);
        localStorage.setItem('harga', harga);
    });

    $('#addToCart').on('click', function(){
        var id = $(this).data('id');
        var id_produk = $('#id_produk').val();
        var foto_produk = $('#foto1').attr('src');
        var nama_produk = $('#nama_produk').text();
        var quantity = $("#value-product").text();
        var totalHarga = $("#total-value").text();
        var note = $('#catatan').val();
        
        // Simpan quantity dan totalHarga ke session
        localStorage.setItem('foto_produk', foto_produk);
        localStorage.setItem('nama_produk', nama_produk);
        localStorage.setItem('quantity', quantity);
        localStorage.setItem('totalHarga', totalHarga);
        localStorage.setItem('note', note);

        var fotoProduk = localStorage.getItem('foto_produk');
        var namaProduk = localStorage.getItem('nama_produk');
        var varian = localStorage.getItem('varian');
        var harga = localStorage.getItem('harga');
        var subtotal = localStorage.getItem('totalHarga');
        var qty = localStorage.getItem('quantity');
        var catatan = localStorage.getItem('note');

        window.location.href='/store_cart/'+ id_produk + '/' + id + '/' + fotoProduk +'/' + namaProduk + '/' + varian + '/' + qty + '/'+ harga + '/' + subtotal + '/' + catatan;

        

        /*
       
            
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '/store_cart',
            method: 'POST',
            data: data,
            success: function (response) {
                // Handle respons dari server (jika ada)
                console.log(response);

                localStorage.clear();
            },
            error: function (error) {
                // Handle kesalahan jika terjadi
                console.error(error);

                localStorage.clear();
            }
        });
        */

    });

});