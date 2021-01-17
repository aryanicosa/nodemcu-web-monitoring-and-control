<?php
    //koneksi
    require 'function.php';

    if (isset($_POST['on']) ) {
        $nilai = 1;
        mysqli_query ($conn, "UPDATE kontrol SET id = 1, nilai = $nilai ");
    }
    if (isset($_POST['off']) ) {
        $nilai = 0;
        mysqli_query ($conn, "UPDATE kontrol SET id = 1, nilai = $nilai ");
	}
?>