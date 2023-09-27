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
