document
    .getElementById("btn-tambah-produk")
    .addEventListener("click", function () {
        // Menghilangkan elemen flex dan items-center di bagian form
        var formElement = document
            .getElementById("varian-plus")
            .querySelector("div");
        formElement.style.display = "block";
        formElement.style.alignItems = "initial";

        // Menghilangkan button tambah varian
        this.style.display = "none";

        // Membuka elemen input dan label yang tersembunyi
        var hiddenInputs = formElement.querySelectorAll(
            "input[hidden], label[hidden]"
        );
        hiddenInputs.forEach(function (element) {
            element.removeAttribute("hidden");
        });
    });

// FUCTION UNTUK MENGARAHKAN BUTTON SIMPAN KE LOGIN.HTML TANPA PERLU REQUIRED DULU
document.addEventListener("DOMContentLoaded", function () {
    const cancelButton = document.getElementById("cancelButton");

    cancelButton.addEventListener("click", function (event) {
        event.preventDefault(); // Mencegah formulir dikirim

        // Mengarahkan ke ../index.html
        window.location.href = "/daftarProduk";
    });
});

// FUNCTION UNTUK MENAMBAH VARIAN 2
document
    .getElementById("btn-tambah-produk")
    .addEventListener("click", function () {
        // Menghapus gaya dari elemen dengan kelas pembungkus-page
        document.querySelector(".pembungkus-page").style.display = "block";

        // Mengambil elemen input dan label
        var inputs = document.querySelectorAll("#varian-plus input");
        var labels = document.querySelectorAll("#varian-plus label");

        // Menghapus atribut hidden dari elemen input dan label
        inputs.forEach(function (input) {
            input.removeAttribute("hidden");
        });

        labels.forEach(function (label) {
            label.removeAttribute("hidden");
        });
    });
