$(document).ready(function(){
    $('.btn-hapus').click(function(){
        var id_rrviews = $(this).data('id');

        $('#id_rreviews').val(id_rrviews);
    });
});