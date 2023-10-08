$(document).ready(function () {
   // Mengisi dropdown provinsi saat halaman dimuat
   $.ajax({
       url: 'http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json',
       method: 'GET',
       success: function (data) {
           $.each(data, function (key, value) {
               $('#provinsi').append($('<option>', {
                   value: value.id,
                   text: value.name
               }));
           });
       }
   });

   // Event listener ketika dropdown provinsi berubah
   $('#provinsi').change(function () {
       var provinsiId = $(this).val();
       
       // Mengambil data kota berdasarkan provinsi yang dipilih
       $.ajax({
           url: 'http://www.emsifa.com/api-wilayah-indonesia/api/regencies/' + provinsiId + '.json',
           method: 'GET',
           success: function (data) {
               $('#kota').empty(); // Mengosongkan dropdown kota
               
               // Mengisi dropdown kota dengan data yang diterima
               $.each(data, function (key, value) {
                   $('#kota').append($('<option>', {
                       value: value.id,
                       text: value.name
                   }));
               });
           }
       });
   });

   // Event listener ketika dropdown kota berubah
   $('#kota').change(function () {
       var kotaId = $(this).val();
       
       // Mengambil data kecamatan berdasarkan kota yang dipilih
       $.ajax({
           url: 'http://www.emsifa.com/api-wilayah-indonesia/api/districts/' + kotaId + '.json',
           method: 'GET',
           success: function (data) {
               $('#kecamatan').empty(); // Mengosongkan dropdown kecamatan
               
               // Mengisi dropdown kecamatan dengan data yang diterima
               $.each(data, function (key, value) {
                   $('#kecamatan').append($('<option>', {
                       value: value.id,
                       text: value.name
                   }));
               });
           }
       });
   });
});