function cariReviews(){
    var KataKunci = $('#cari_kata').val();

    var RRArray = $("#rreviews-table tbody tr");

    RRArray.each(function(){
        var reviews = $(this).find("td:eq(1)").text();

        var cocokKataKunci = KataKunci === "" || reviews.includes(KataKunci);
        
        console.log(cocokKataKunci);

        if(cocokKataKunci){
            $(this).show();
        }else{
            $(this).hide();
        }
    
    });

    $("#rreviews-table tbody").html(RRArray);
}

// Ketika input atau pilihan berubah
$("#cari_kata").on("input change", function() {
    cariReviews();
});