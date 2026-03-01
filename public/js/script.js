$(function () {
    const BASE_URL = 'http://mvcv2sndk.test/public';

    // Modal tambah data
    $('.modal-tambah').on('click', function(){
        $('#judulmodal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Simpan');
    });

    // Modal ubah data
    $('.modal-ubah').on('click', function(){
        $('#judulmodal').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah');
        $('.modal-body form').attr('action', `${BASE_URL}/mahasiswa/ubah`);

        const id = $(this).data('id');
        
        $.ajax({
            url: `${BASE_URL}/mahasiswa/getUbah`,
            data: {id: id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });
    });
});
