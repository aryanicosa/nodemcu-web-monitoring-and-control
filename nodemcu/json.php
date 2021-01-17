<?php

//koneksi
require 'function.php';

//query pemilih data 
$query = mysqli_query($conn, 'SELECT * FROM kontrol');

while ($row = mysqli_fetch_assoc($query)) {
	$rows[] = $row; //rows data yang diambil dimasukkan wadah row
    }
    
    //echo '<pre>'; print_r($rows); echo '</pre>';				
    echo json_encode($rows);
    
?>