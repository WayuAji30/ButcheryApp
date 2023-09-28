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
    window.location.href = "daftarProduk.html";
  });
});
