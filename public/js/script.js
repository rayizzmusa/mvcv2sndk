$(function (){

    $('.modal-tambah').on('click', function(){
        $('#judulmodal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Simpan');
    });

    $('.modal-ubah').on('click', function(){
        $('#judulmodal').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah');
        $('.modal-body form').attr('action', 'http://mvcv2sndk.test/public/mahasiswa/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://mvcv2sndk.test/public/mahasiswa/getUbah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(e){
                $('#nama').val(e.nama);
                $('#nim').val(e.nim);
                $('#email').val(e.email);
                $('#jurusan').val(e.jurusan);
                $('#id').val(e.id);
            }
        });

    });



});