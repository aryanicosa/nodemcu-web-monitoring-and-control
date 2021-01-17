<?php

	//koneksi
	require 'function.php';

    //tampilkan dari database
    $query = mysqli_query ($conn, "SELECT sensor FROM sensor WHERE id = 1");
    $result = mysqli_fetch_row($query);
    
    echo "SENSOR : ";
    echo $result[0];

	?>