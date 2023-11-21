$('#username').on('input', function() {
   const inputValue = $(this).val();
   localStorage.setItem('username', inputValue);
});

$('#provinsi').change(function () {
    var provinsiId = $(this).val();
    var username = $(this).val();
    
    // Simpan nilai provinsi yang dipilih di localStorage
    localStorage.setItem('selectedProvinsiId', provinsiId);

   // Membangun URL dengan ID provinsi yang dipilih
   var url = '/register_userProv/' + provinsiId + '/' + null;
        
   // Mengarahkan pengguna ke URL yang sesuai
   window.location.href = url;
});

$('#kota').change(function () {
    var kotaId = $(this).val();
    var ProvinsiId = localStorage.getItem('selectedProvinsiId');

    // Simpan nilai provinsi yang dipilih di localStorage
    localStorage.setItem('kotaId', kotaId);

   // Membangun URL dengan ID provinsi yang dipilih
   var url = '/register_userProv/' + ProvinsiId +'/'+kotaId;
        
   // Mengarahkan pengguna ke URL yang sesuai
   window.location.href = url;
});

$('#alamat').on('input', function() {
   const inputValue = $(this).val();
   localStorage.setItem('alamat', inputValue);
});

$(document).ready(function () {
   // Cek apakah ada nilai provinsi yang tersimpan di localStorage
   var selectedProvinsiId = localStorage.getItem('selectedProvinsiId');
   var selectedKotaId = localStorage.getItem('kotaId'); 
   var username = localStorage.getItem('username');
   var alamat = localStorage.getItem('alamat');

   // Periksa apakah ada nilai yang disimpan
   if (username) {
      // Isi nilai ke dalam elemen input teks
      $('#username').val(username);
   }
   if (selectedProvinsiId) {
       // Set nilai dropdown provinsi berdasarkan nilai yang tersimpan
       $('#provinsi').val(selectedProvinsiId);
   }
   if(selectedKotaId){
       // Set nilai dropdown kota berdasarkan nilai yang tersimpan
      $('#kota').val(selectedKotaId);
   }
   if (alamat) {
      // Isi nilai ke dalam elemen input teks
      $('#alamat').val(alamat);
  }

   console.log(localStorage);
});