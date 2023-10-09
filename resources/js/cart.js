// Temukan semua elemen checkbox di dalam dokumen
const checkboxes = document.querySelectorAll('input[type="checkbox"]');

// Fungsi untuk memperbarui jumlah produk
function updateJumlahProduk() {
    const jumlahProduk = document.getElementById("jumlah-produk");
    const jumlahTerpilih = document.querySelectorAll(
        'input[type="checkbox"]:checked'
    ).length;
    jumlahProduk.textContent = jumlahTerpilih;
}

// Tambahkan event listener untuk setiap checkbox
checkboxes.forEach((checkbox) => {
    checkbox.addEventListener("change", updateJumlahProduk);
});

document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll("button");

    buttons.forEach((button) => {
        button.addEventListener("click", function () {
            buttons.forEach((btn) => btn.classList.remove("active"));
            this.classList.add("active");
        });
    });
});

// FUCTION UNTUK MENGHAPUS PRODUK YG DIPILIH DI
document.addEventListener("DOMContentLoaded", function () {
    // Mengambil semua tombol remove
    var removeButtons = document.querySelectorAll("#btn-remove");

    // Menambahkan event listener untuk setiap tombol remove
    removeButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            // Mengambil parent element (div) dari tombol remove
            var parentDiv = button.parentElement.parentElement.parentElement;

            // Menghapus parentDiv dari DOM
            parentDiv.remove();

            // Hitung ulang jumlah produk dan total harga
            updateCartSummary();
        });
    });

    function updateCartSummary() {
        var totalProducts = document.querySelectorAll(".w-[100%]").length;
        var totalPrice = 0;

        // Mengambil semua elemen harga
        var prices = document.querySelectorAll("#harga");

        prices.forEach(function (price) {
            var priceValue = parseFloat(
                price.innerText.replace("Rp", "").replace(",", "")
            );
            totalPrice += priceValue;
        });

        // Memperbarui jumlah produk dan total harga di HTML
        document.getElementById("jumlah-produk").innerText = totalProducts;
        document.getElementById("harga-total").innerText =
            totalPrice.toLocaleString("id-ID");
    }
});
