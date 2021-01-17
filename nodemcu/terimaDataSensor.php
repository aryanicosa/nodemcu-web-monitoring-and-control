<?php 

	//koneksi
	require 'function.php';

	//baca nilai sensor
	$sensor = @$_POST["sensor"];

	//masukkan database
    mysqli_query ($conn, "UPDATE sensor SET id = 1, sensor = $sensor");

	?>