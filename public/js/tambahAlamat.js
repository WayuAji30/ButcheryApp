$(document).ready(function(){
    $('#ubah_alamat').click(function(){
        var alamat1 = $(this).data('alamat1');
        var alamat2 = $(this).data('alamat2');
        var alamat3 = $(this).data('alamat3');
        
        $('#alamat1').val(alamat1);
        $('#alamat2').val(alamat2);
        $('#alamat3').val(alamat3);

    });

    $('input[type="radio"]').change(function() {
        var alamat = $(this).val();

        $('#alamat-user').text(alamat);
    });

    function hapusTombolTambahAlamat(){
        const jumlahAlamat = $('input[type="radio"]').length;
        console.log(jumlahAlamat);
        if(jumlahAlamat == 3){
            $('.tambah_alamat').hide();
        }else{
            $('.tambah_alamat').show();
        }
    }

    hapusTombolTambahAlamat();
});