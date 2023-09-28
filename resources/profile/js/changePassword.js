// FUCTION UNTUK MENGGANTI TYPE INPUT MENJADI TEXT & PASSWORD
document.addEventListener("DOMContentLoaded", function () {
    const eyeCloseButtons = document.querySelectorAll(".btn-eye-close");
    const eyeOpenButtons = document.querySelectorAll(".btn-eye-open");
    const passwordInputs = document.querySelectorAll('input[type="password"]');

    eyeCloseButtons.forEach(function (button, index) {
        button.addEventListener("click", function () {
            passwordInputs[index].type = "text";
            button.hidden = true;
            eyeOpenButtons[index].hidden = false;
        });
    });

    eyeOpenButtons.forEach(function (button, index) {
        button.addEventListener("click", function () {
            passwordInputs[index].type = "password";
            button.hidden = true;
            eyeCloseButtons[index].hidden = false;
        });
    });
});

// FUCTION UNTUK MENGARAHKAN BUTTON SIMPAN KE LOGIN.HTML TANPA PERLU REQUIRED DULU
document.addEventListener("DOMContentLoaded", function () {
    const cancelButton = document.getElementById("cancelButton");

    cancelButton.addEventListener("click", function (event) {
        event.preventDefault(); // Mencegah formulir dikirim

        // Mengarahkan ke ../index.html
        window.location.href = "../login.html";
    });
});

// FUNCTION UNTUK VALIDASI INPUT SUDAH DIISI BARU BISA CLICK BUTTON SIMPAN
document.addEventListener("DOMContentLoaded", function () {
    // Memilih elemen-elemen yang diperlukan
    var emailInput = document.querySelector('input[type="email"]');
    var passwordInputs = document.querySelectorAll('input[type="password"]');
    var saveButton = document.getElementById("saveButton");

    // Menambahkan event listener untuk input email
    emailInput.addEventListener("input", validateInputs);

    // Menambahkan event listener untuk input password
    for (var i = 0; i < passwordInputs.length; i++) {
        passwordInputs[i].addEventListener("input", validateInputs);
    }

    function validateInputs() {
        // Memeriksa apakah semua input telah diisi
        var allInputsFilled = true;
        if (emailInput.value === "") {
            allInputsFilled = false;
        }
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
