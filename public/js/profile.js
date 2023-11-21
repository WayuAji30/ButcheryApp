// untuk DOM di ubah kata sandi
document.addEventListener('DOMContentLoaded', function() {
    const ubahPasswordForm = document.getElementById('ubahPassword');
    const editProfileForm = document.getElementById('form_edit_profile');
    const ubahPasswordButton = document.getElementById('profile-change-password');
    const submitEditProfileButton = document.getElementById('submitEditProfile');
    const cancelButton = document.getElementById('cancelButton2');

    ubahPasswordButton.addEventListener('click', function() {
        ubahPasswordForm.style.display = 'block';
        editProfileForm.style.display = 'none';
        ubahPasswordButton.style.display = 'none';
        submitEditProfileButton.style.display = 'none';
    });

    cancelButton.addEventListener('click', function() {
        ubahPasswordForm.style.display = 'none';
        editProfileForm.style.display = 'block';
        ubahPasswordButton.style.display = 'block';
        submitEditProfileButton.style.display = 'block';
    });
});

// FUNCTION UNTUK VALIDASI INPUT SUDAH DIISI BARU BISA CLICK BUTTON SIMPAN
document.addEventListener("DOMContentLoaded", function () {
    // Memilih elemen-elemen yang diperlukan
    var passwordInputs = document.querySelectorAll('input[type="password"]');
    var saveButton = document.getElementById("saveButton");

    // Menambahkan event listener untuk input password
    for (var i = 0; i < passwordInputs.length; i++) {
        passwordInputs[i].addEventListener("input", validateInputs);
    }

    function validateInputs() {
        // Memeriksa apakah semua input telah diisi
        var allInputsFilled = true;

        for (var i = 0; i < passwordInputs.length; i++) {
            if (passwordInputs[i].value === "") {
                allInputsFilled = false;
            }
        }

        // Mengubah warna latar belakang tombol "Simpan"
        if (allInputsFilled) {
            saveButton.classList.remove("bg-[#ccc]");
            saveButton.classList.add("bg-[#D10B05]");
            saveButton.disabled = false; // Mengaktifkan tombol
        } else {
            saveButton.classList.remove("bg-[#D10B05]");
            saveButton.classList.add("bg-[#ccc]");
            saveButton.disabled = true; // Menonaktifkan tombol
        }
    }
});

$(document).ready(function() {
    // Simpan nilai awal dari input
    var nilaiAwalUsername = $('#username').val();
    var nilaiAwalEmail = $('#email').val();
    var nilaiAwalNoHP = $('#no_hp').val();
    var nilaiAwalProvinsi = $('#provinsi').val();
    var nilaiAwalKota = $('#kota').val();
    var nilaiAwalKecamatan = $('#kecamatan').val();
    var nilaiAwalAlamat = $('#alamat').val();

    // Event listener saat input berubah
    $('#username').on('input', function() {
      // Bandingkan nilai saat ini dengan nilai awal
      if ($(this).val() !== nilaiAwalUsername) {
        // Jika ada perubahan, aktifkan tombol "Simpan Perubahan"
        $('#submitEditProfile').prop('disabled', false);
        $('#submitEditProfile').removeClass('bg-[#ccc]');
        $('#submitEditProfile').addClass('bg-[#D10B05] border-[#D10B05]');
      } else {
        // Jika tidak ada perubahan, nonaktifkan tombol "Simpan Perubahan"
        $('#submitEditProfile').prop('disabled', true);
        $('#submitEditProfile').removeClass('bg-[#D10B05] border-[#D10B05]');
        $('#submitEditProfile').addClass('bg-[#ccc]');
      }
    });

       // Event listener saat input berubah
     $('#email').on('input', function() {
        // Bandingkan nilai saat ini dengan nilai awal
        if ($(this).val() !== nilaiAwalEmail) {
          // Jika ada perubahan, aktifkan tombol "Simpan Perubahan"
          $('#submitEditProfile').prop('disabled', false);
          $('#submitEditProfile').removeClass('bg-[#ccc]');
          $('#submitEditProfile').addClass('bg-[#D10B05] border-[#D10B05]');
        } else {
          // Jika tidak ada perubahan, nonaktifkan tombol "Simpan Perubahan"
          $('#submitEditProfile').prop('disabled', true);
          $('#submitEditProfile').removeClass('bg-[#D10B05] border-[#D10B05]');
          $('#submitEditProfile').addClass('bg-[#ccc]');
        }
  
      });

      // Event listener saat input berubah
     $('#no_hp').on('input', function() {
        // Bandingkan nilai saat ini dengan nilai awal
        if ($(this).val() !== nilaiAwalNoHP) {
          // Jika ada perubahan, aktifkan tombol "Simpan Perubahan"
          $('#submitEditProfile').prop('disabled', false);
          $('#submitEditProfile').removeClass('bg-[#ccc]');
          $('#submitEditProfile').addClass('bg-[#D10B05] border-[#D10B05]');
        } else {
          // Jika tidak ada perubahan, nonaktifkan tombol "Simpan Perubahan"
          $('#submitEditProfile').prop('disabled', true);
          $('#submitEditProfile').removeClass('bg-[#D10B05] border-[#D10B05]');
          $('#submitEditProfile').addClass('bg-[#ccc]');
        }
      });

      // Event listener saat input berubah
     $('#provinsi').on('input', function() {
        // Bandingkan nilai saat ini dengan nilai awal
        if ($(this).val() !== nilaiAwalProvinsi) {
          // Jika ada perubahan, aktifkan tombol "Simpan Perubahan"
          $('#submitEditProfile').prop('disabled', false);
          $('#submitEditProfile').removeClass('bg-[#ccc]');
          $('#submitEditProfile').addClass('bg-[#D10B05] border-[#D10B05]');
        } else {
          // Jika tidak ada perubahan, nonaktifkan tombol "Simpan Perubahan"
          $('#submitEditProfile').prop('disabled', true);
          $('#submitEditProfile').removeClass('bg-[#D10B05] border-[#D10B05]');
          $('#submitEditProfile').addClass('bg-[#ccc]');
        }
      });

       // Event listener saat input berubah
     $('#kota').on('input', function() {
        // Bandingkan nilai saat ini dengan nilai awal
        if ($(this).val() !== nilaiAwalKota) {
          // Jika ada perubahan, aktifkan tombol "Simpan Perubahan"
          $('#submitEditProfile').prop('disabled', false);
          $('#submitEditProfile').removeClass('bg-[#ccc]');
          $('#submitEditProfile').addClass('bg-[#D10B05] border-[#D10B05]');
        } else {
          // Jika tidak ada perubahan, nonaktifkan tombol "Simpan Perubahan"
          $('#submitEditProfile').prop('disabled', true);
          $('#submitEditProfile').removeClass('bg-[#D10B05] border-[#D10B05]');
          $('#submitEditProfile').addClass('bg-[#ccc]');
        }
      });

       // Event listener saat input berubah
     $('#kecamatan').on('input', function() {
        // Bandingkan nilai saat ini dengan nilai awal
        if ($(this).val() !== nilaiAwalKecamatan) {
          // Jika ada perubahan, aktifkan tombol "Simpan Perubahan"
          $('#submitEditProfile').prop('disabled', false);
          $('#submitEditProfile').removeClass('bg-[#ccc]');
          $('#submitEditProfile').addClass('bg-[#D10B05] border-[#D10B05]');
        } else {
          // Jika tidak ada perubahan, nonaktifkan tombol "Simpan Perubahan"
          $('#submitEditProfile').prop('disabled', true);
          $('#submitEditProfile').removeClass('bg-[#D10B05] border-[#D10B05]');
          $('#submitEditProfile').addClass('bg-[#ccc]');
        }
      });

       // Event listener saat input berubah
     $('#alamat').on('input', function() {
        // Bandingkan nilai saat ini dengan nilai awal
        if ($(this).val() !== nilaiAwalAlamat) {
          // Jika ada perubahan, aktifkan tombol "Simpan Perubahan"
          $('#submitEditProfile').prop('disabled', false);
          $('#submitEditProfile').removeClass('bg-[#ccc]');
          $('#submitEditProfile').addClass('bg-[#D10B05] border-[#D10B05]');
        } else {
          // Jika tidak ada perubahan, nonaktifkan tombol "Simpan Perubahan"
          $('#submitEditProfile').prop('disabled', true);
          $('#submitEditProfile').removeClass('bg-[#D10B05] border-[#D10B05]');
          $('#submitEditProfile').addClass('bg-[#ccc]');
        }
      });
      
  });