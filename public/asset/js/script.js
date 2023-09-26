const flashData = $('.flash-data') .data('flashdata');
if(flashData){
    swal({
        'title' : 'The Comic',
        'text' : 'Berhasil' + flashData,
        'type' : 'success'
    })
}