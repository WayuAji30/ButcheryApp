$('#register_mitra').on('click',function(){
   const id = $(this).data('id');
   localStorage.setItem('user_id',id);
});
$('#nama_toko').on('input', function() {
   const inputValue = $(this).val();
   localStorage.setItem('nama_toko', inputValue);
});
$('#email').on('input', function() {
   const inputValue = $(this).val();
   localStorage.setItem('email', inputValue);
});
$('#no_telp').on('input', function() {
   const inputValue = $(this).val();
   localStorage.setItem('no_telp', inputValue);
});
$('#no_wa').on('input', function() {
   const inputValue = $(this).val();
   localStorage.setItem('no_wa', inputValue);
});
$('#norek').on('input', function() {
   const inputValue = $(this).val();
   localStorage.setItem('norek', inputValue);
});

$('#provinsi').change(function () {
    var provinsiId = $(this).val();
    var username = $(this).val();
    var userId = localStorage.getItem('user_id');
    
    // Simpan nilai provinsi yang dipilih di localStorage
    localStorage.setItem('selectedProvinsiId', provinsiId);

   // Membangun URL dengan ID provinsi yang dipilih
   var url = '/register_mitraProv/'+ userId +'/' + provinsiId + '/' + null;
        
   // Mengarahkan pengguna ke URL yang sesuai
   window.location.href = url;
});

$('#kota').change(function () {
    var kotaId = $(this).val();
    var userId = localStorage.getItem('user_id');
    var ProvinsiId = localStorage.getItem('selectedProvinsiId');

    // Simpan nilai provinsi yang dipilih di localStorage
    localStorage.setItem('kotaId', kotaId);

   // Membangun URL dengan ID provinsi yang dipilih
   var url = '/register_mitraProv/'+ userId +'/' + ProvinsiId +'/'+kotaId;
        
   // Mengarahkan pengguna ke URL yang sesuai
   window.location.href = url;
});

$('#alamat').on('input', function() {
   const inputValue = $(this).val();
   localStorage.setItem('alamat', inputValue);
});

$(document).ready(function () {
   // Cek apakah ada nilai provinsi yang tersimpan di localStorage 
   var nama_toko = localStorage.getItem('nama_toko');
   var email = localStorage.getItem('email');
   var no_telp = localStorage.getItem('no_telp');
   var no_wa = localStorage.getItem('no_wa');
   var norek = localStorage.getItem('norek');
   var selectedProvinsiId = localStorage.getItem('selectedProvinsiId');
   var selectedKotaId = localStorage.getItem('kotaId');
   var alamat = localStorage.getItem('alamat');

   // Periksa apakah ada nilai yang disimpan
   if (nama_toko) {
      // Isi nilai ke dalam elemen input teks
      $('#nama_toko').val(nama_toko);
   }
   if(email){
      // Isi nilai ke dalam elemen input teks
      $('#email').val(email);
   }
   if(no_telp){
      // Isi nilai ke dalam elemen input teks
      $('#no_telp').val(no_telp);
   }
   if(no_wa){
       // Isi nilai ke dalam elemen input teks
       $('#no_wa').val(no_wa);
   }
   if(norek){
       // Isi nilai ke dalam elemen input teks
       $('#norek').val(norek);
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