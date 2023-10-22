$(document).ready(function(){
    var subtotal = $('#subtotal').val();
    var b_ongkir = $('#ongkir').text().replace(/\./g, "");
    var b_layanan = $('#layanan').text().replace(/\./g, "");
    var b_asuransi = $('#asuransi').text().replace(/\./g, "");
    var b_tambahan = $('#tambahan').text().replace(/\./g, "");    
    
    const total_harga = parseInt(subtotal.replace(/\./g, "")) + parseInt(b_ongkir) + parseInt(b_layanan) + parseInt(b_asuransi) + parseInt(b_tambahan);

    $('#harga-barang').text(subtotal);
    $('#harga-total').text(total_harga.toLocaleString("id-ID"));


    $('#motor').on('click',function(){
        var pengiriman = $('#motor #motor_j').text();

        $('#motor').removeClass('border-[#ccc]');
        $('#motor p').removeClass('text-[#999]');
        $('#motor').addClass('border-[#D10B05]');

        $('#mobil').removeClass('border-[#D10B05]');
        $('#mobil').addClass('border-[#ccc]');
        $('#mobil p').addClass('text-[#999]');
    });
    
    $('#mobil').on('click',function(){
        var pengiriman = $('#mobil #mobil_j').text();

        $('#motor').addClass('border-[#ccc]');
        $('#motor p').addClass('text-[#999]');
        $('#motor').removeClass('border-[#D10B05]');

        $('#mobil').addClass('border-[#D10B05]');
        $('#mobil').removeClass('border-[#ccc]');
        $('#mobil p').removeClass('text-[#999]');
    });
});