// Fungsi untuk melakukan live search dan filter
function cariProduk() {
    var kataKunci = $("#cari_daftarproduk").val().toLowerCase();
    var kategori = $("#kategori").val();
    var filter = $("#filter").val();

    // Mendapatkan daftar produk sebagai array jQuery
    var produkArray = $("#produk-table tbody tr");

    // Urutkan produk berdasarkan filter (ASC atau DESC)
    if (filter === "ASC") {
        produkArray.sort(function(a, b) {
            var textA = $(a).find("td:eq(1)").text().toLowerCase(); // Nama Produk
            var textB = $(b).find("td:eq(1)").text().toLowerCase(); // Nama Produk
            return textA.localeCompare(textB);
        });
    } else if (filter === "DESC") {
        produkArray.sort(function(a, b) {
            var textA = $(a).find("td:eq(1)").text().toLowerCase(); // Nama Produk
            var textB = $(b).find("td:eq(1)").text().toLowerCase(); // Nama Produk
            return textB.localeCompare(textA);
        });
    }

    // Loop melalui setiap baris produk dalam tabel
    produkArray.each(function() {
        var namaProduk = $(this).find("td:eq(1)").text().toLowerCase(); // Mengambil teks dari kolom nama produk
        //dalam baris tersebut dan memilih elemen dengan indeks 1. Indeks 1 mengacu pada kolom info produk/nama produk 
        var kategoriProduk = $(this).data("kategori").toLowerCase();

       //var filterProduk = $(this).data("filter").toLowerCase(); // Mengambil data filter dari baris
       //var filterProduk2 = $(this).data("filter2").toLowerCase(); 

        var cocokKataKunci = kataKunci === "" || namaProduk.includes(kataKunci);
        var cocokKategori = kategori === "" || kategoriProduk === kategori;
        //var cocokFilter = filter === "" || filterProduk === filter || filterProduk2 === filter;

        console.log(cocokKataKunci);

        if (cocokKataKunci && cocokKategori) {
            $(this).show();
        } else {
            $(this).hide();
        }
    });

    // Sisipkan ulang baris-baris produk yang sudah diurutkan
    $("#produk-table tbody").html(produkArray);
}

// Ketika input atau pilihan berubah
$("#cari_daftarproduk, #kategori, #filter").on("input change", function() {
    cariProduk();
});