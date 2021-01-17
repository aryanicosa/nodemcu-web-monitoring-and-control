<?php 

	//koneksi
    require 'function.php';

    //nilai led
	$query = mysqli_query ($conn, "SELECT nilai FROM kontrol WHERE id = 1");
    $result = mysqli_fetch_row($query);

    if ($result[0] == 1) {
    	$led = "ON";
    } else {
    	$led = "OFF";
    }

    echo "Kondisi LED : ", $led;
?>