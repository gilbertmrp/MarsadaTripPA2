$(document).on('click','.send', function(){
    /* Inputan Formulir */
    var input_name          = $("#name").val(),
        input_email         = $("#email").val(),
        input_phone         = $("#phone").val(),
        input_product       = $("#product").val(),
        input_description   = $("#description").val();

    /* Pengaturan Whatsapp */
    var walink      = '<a class="vglnk" href="https://web.whatsapp.com/send" rel="nofollow"><span>https</span><span>://</span><span>web</span><span>.</span><span>whatsapp</span><span>.</span><span>com</span><span>/</span><span>send</span></a>',
        phone       = '6281360417510',
        text        = 'Halo saya ingin memesan ',
        text_yes    = 'Pesanan Anda berhasil terkirim.',
        text_no     = 'Isilah formulir terlebih dahulu.';

    /* Smartphone Support */
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        var walink = 'whatsapp://send';
    }

    if(input_name != "" && input_phone != "" && input_product != ""){
        /* Whatsapp URL */
        var checkout_whatsapp = walink + '?phone=' + phone + '&text=' + text + '%0A%0A' +
            '*Nama* : ' + input_name + '%0A' +
            '*Alamat Email* : ' + input_email + '%0A' +
            '*Nomor Kontak / Whatsapp* : ' + input_phone + '%0A' +
            '*Produk* : ' + input_product + '%0A' +
            '*Catatan* : ' + input_description + '%0A';

        /* Whatsapp Window Open */
        window.open(checkout_whatsapp,'_blank');
        document.getElementById("text-info").innerHTML = '<div class="alert alert-success">'+text_yes+'</div>';
    } else {
        document.getElementById("text-info").innerHTML = '<div class="alert alert-danger">'+text_no+'</div>';
    }
});
