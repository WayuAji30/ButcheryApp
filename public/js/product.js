$(document).ready(function(){
    var varian = $('#item-weight').text();
    localStorage.setItem('varian', varian);
    var harga = $('#value-view').text();
    localStorage.setItem('harga',harga.replace(/\./g, ""));

    $('#low').on('click', function(){
        var varian = $(this).data('varian');
        var harga = $(this).data('price');
        var stok = $(this).data('stok');

        if (localStorage.getItem('harga')) {
            localStorage.removeItem('harga'); // Hapus session yang lama
        }

        localStorage.setItem('varian', varian);
        localStorage.setItem('harga', harga);

        $('#value-stok').text(stok);
    });

    $('#mid').on('click', function(){
        var varian = $(this).data('varian');
        var harga = $(this).data('price');
        var stok = $(this).data('stok');

        // Periksa apakah session yang sebelumnya sudah ada
        if (localStorage.getItem('varian')) {
            localStorage.removeItem('varian'); // Hapus session yang lama
        }

        if (localStorage.getItem('harga')) {
            localStorage.removeItem('harga'); // Hapus session yang lama
        }

        localStorage.setItem('varian', varian);
        localStorage.setItem('harga', harga);
        
       $('#value-stok').text(stok);
    });

    $('#high').on('click', function(){
      var varian = $(this).data('varian');
      var harga = $(this).data('price');
      var stok = $(this).data('stok');

      // Periksa apakah session yang sebelumnya sudah ada
      if (localStorage.getItem('varian')) {
          localStorage.removeItem('varian'); // Hapus session yang lama
      }

      if (localStorage.getItem('harga')) {
          localStorage.removeItem('harga'); // Hapus session yang lama
      }

      localStorage.setItem('varian', varian);
      localStorage.setItem('harga', harga);
      
     $('#value-stok').text(stok);
  });

    $('#kota').change(function(){
        var tujuan = $(this).val();
        var asal = $('#asal').text();
        const EarthRadius = 6371;

        $.ajax({
            url:
              'https://geocode.search.hereapi.com/v1/geocode?q=' +
              asal +
              '&apiKey=HTj_6XDXdyLOEp6qCjTJ4blivZv94GheROStKRoIFA8',
            method: 'GET',
            success: function (dataAsal) {
              $.ajax({
                url:
                  'https://geocode.search.hereapi.com/v1/geocode?q=' +
                  tujuan +
                  '&apiKey=HTj_6XDXdyLOEp6qCjTJ4blivZv94GheROStKRoIFA8',
                method: 'GET',
                success: function (dataTujuan) {
                  var lat1 = dataAsal.items[0].position.lat;
                  var lon1 = dataAsal.items[0].position.lng;
                  var lat2 = dataTujuan.items[0].position.lat;
                  var lon2 = dataTujuan.items[0].position.lng;
      
                  // Menghitung jarak antara dua titik dalam kilometer
                  var jarak = haversine(lat1, lon1, lat2, lon2);
                  if(parseInt(jarak) > 1000){
                    $('#ongkir').text('Ongkos Kirim: Rp 24.000 - Rp 180.000');
                  }else{
                    $('#ongkir').text('Ongkos Kirim: Rp 0 - Rp 24.000');
                  }
                  
                },
                error: function (errTujuan) {
                  console.log(errTujuan);
                },
              });
            },
            error: function (errAsal) {
              console.log(errAsal);
            },
          });
        });
      
        // Fungsi Haversine Formula untuk menghitung jarak
        function haversine(lat1, lon1, lat2, lon2) {
          const EarthRadius = 6371; // Radius bumi dalam kilometer
          const dLat = (lat2 - lat1) * (Math.PI / 180);
          const dLon = (lon2 - lon1) * (Math.PI / 180);
      
          const a =
            Math.sin(dLat / 2) * Math.sin(dLat / 2) +
            Math.cos(lat1 * (Math.PI / 180)) *
              Math.cos(lat2 * (Math.PI / 180)) *
              Math.sin(dLon / 2) *
              Math.sin(dLon / 2);
      
          const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
          const jarak = EarthRadius * c;
      
          return jarak;
        }
});


    $('#addToCart').on('click', function(){
        var id = $(this).data('id_user');
        var id_produk = $(this).data('id_produk');
        var id_supplier = $(this).data('id_supplier');
        var foto_produk = $('#foto_produk').val();
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

        var namaProduk = localStorage.getItem('nama_produk');
        var varian = localStorage.getItem('varian');
        var harga = localStorage.getItem('harga');
        var subtotal = localStorage.getItem('totalHarga');
        var qty = localStorage.getItem('quantity');
        var catatan = (localStorage.getItem('note')) ? localStorage.getItem('note') : 'tidak ada catatan' ;

        window.location.href='/store_cart/' + id + '/' + id_produk + '/' + id_supplier + '/' + namaProduk + '/' + varian + '/' + harga + '/' + qty+ '/' + subtotal + '/' + catatan + '/' + foto_produk ;
      });

      $('#btn-beli').click(function(){
        var id = $(this).data('id_user');
        var id_produk = $(this).data('id_produk');
        var id_supplier = $(this).data('id_supplier');
        var foto_produk = $('#foto_produk').val();
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

        var namaProduk = localStorage.getItem('nama_produk');
        var varian = localStorage.getItem('varian');
        var harga = localStorage.getItem('harga');
        var subtotal = localStorage.getItem('totalHarga');
        var qty = localStorage.getItem('quantity');
        var catatan = (localStorage.getItem('note')) ? localStorage.getItem('note') : 'tidak ada catatan' ;

        window.location.href='/store_checkout/' + id + '/' + id_supplier + '/' + id_produk + '/' + foto_produk + '/' + namaProduk + '/' + varian + '/' + harga + '/' + qty+ '/' + subtotal + '/' + catatan  ;
      });
