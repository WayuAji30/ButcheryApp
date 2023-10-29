$(document).ready(function () {
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
