$(document).ready(function () {
    $("#foto1").change(function () {
        var imagePreview = $("#uploadedImage");
        var file = this.files[0];

        if (file) {
            // Membaca gambar sebagai URL data
            var reader = new FileReader();
            reader.onload = function (e) {
                imagePreview.attr("src", e.target.result);
            };
            reader.readAsDataURL(file);

            $('.foto-utama').addClass('hidden');
            imagePreview.removeClass('hidden');
        } else {
            imagePreview.attr("src", ""); // Menghapus gambar saat tidak ada file yang dipilih
        }
    });

    $("#foto2").change(function () {
        var imagePreview = $("#uploadedImage2");
        var file = this.files[0];

        if (file) {
            // Membaca gambar sebagai URL data
            var reader = new FileReader();
            reader.onload = function (e) {
                imagePreview.attr("src", e.target.result);
            };
            reader.readAsDataURL(file);

            $('.foto-kedua').addClass('hidden');
            imagePreview.removeClass('hidden');
        } else {
            imagePreview.attr("src", ""); // Menghapus gambar saat tidak ada file yang dipilih
        }
    });

    
    $("#foto3").change(function () {
        var imagePreview = $("#uploadedImage3");
        var file = this.files[0];

        if (file) {
            // Membaca gambar sebagai URL data
            var reader = new FileReader();
            reader.onload = function (e) {
                imagePreview.attr("src", e.target.result);
            };
            reader.readAsDataURL(file);

            $('.foto-ketiga').addClass('hidden');
            imagePreview.removeClass('hidden');
        } else {
            imagePreview.attr("src", ""); // Menghapus gambar saat tidak ada file yang dipilih
        }
    });
    

    $('#btn-tambah-varian').click(function(){
        $('#btn-tambah-varian').toggle();
        $('.pembungkus-page').css('display','flex');
        $('.pembungkus-page').css('display','block');

        var inputs = $("#varian-plus input");
        var labels = $("#varian-plus label");

        inputs.each(function () {
            $(this).removeAttr("hidden");
        });

        labels.each(function () {
            $(this).removeAttr("hidden");
        });
    
    });

    $('#btn-tambah-varian3').click(function(){
        $('#btn-tambah-varian3').toggle();
        $('.pembungkus-page-3').css('display','flex');
        $('.pembungkus-page-3').css('display','block');

        var inputs = $("#varian-plus-3 input");
        var labels = $("#varian-plus-3 label");

        inputs.each(function () {
            $(this).removeAttr("hidden");
        });

        labels.each(function () {
            $(this).removeAttr("hidden");
        });
    
    });
  
    // Ketika tombol "Batal" ditekan
    $("#cancelButton").on("click", function (event) {
        event.preventDefault();
        window.location.href = "/tambahProduk";
    });
});
