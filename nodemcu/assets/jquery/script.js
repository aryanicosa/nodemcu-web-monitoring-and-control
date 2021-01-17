$(document).ready(function() {
	//sembunyikan tombol cari
	$('#tombol-cari').hide();

	//event ketika keyword ditulis
	$('#keyword').on('keyup', function() {


		//ajax menggunakan load
//		$('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());

		//$.get, sama seperti diatas tapi lebih fleksibel di edit
		$.get('ajax/pasien.php?keyword=' + $('#keyword').val(), function(data) {

			$('#container').html(data);


		});

	});


});