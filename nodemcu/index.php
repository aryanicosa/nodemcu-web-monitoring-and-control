<?php 

	//koneksi
    require 'function.php';

?>

<!DOCTYPE html> 
<html> 
	
<head>
	<script src="assets/jquery/jquery.min.js"></script>
	<script src="assets/jquery/scriptku.js"></script>

	<script type="text/javascript">
	$(document).ready(function(){
		setInterval(function(){
			$("#nilaiSensor").load('ambilDataSensor.php');
		}, 500) ; 
	});
	</script>

	<script type="text/javascript">
	$(document).ready(function(){
		setInterval(function(){
			$("#kondisiLed").load('kondisiLed.php');
		}, 1000) ; 
	});
	</script>

	<script>
	$(document).ready(function () {
		$('#on').click(function (e) {
		e.preventDefault();
		var on = $('#on').val();
		$.ajax
			({
			type: "POST",
			url: "kirimDataLed.php",
			data: { "on": on },
			success: function (data) {
				$('#form1').reset();
			}
			});
		});
	});
	</script>

	<script>
	$(document).ready(function () {
		$('#off').click(function (e) {
		e.preventDefault();
		var off = $('#off').val();
		$.ajax
			({
			type: "POST",
			url: "kirimDataLed.php",
			data: { "off": off },
			success: function (data) {
				$('#form2').reset();
			}
			});
		});
	});
	</script>

</head> 

<body>
	<center>
	<h1>Control Led & Monitor Sensor</h1> 
    
    <br>
    <div>
        <span id=nilaiSensor style="font-size: large;"></span>
    </div>
    <br>
	
	<div>
		<span id=kondisiLed style="font-size: large"></span>
	</div>

	<br>

	<form action="" method="POST" id="form1"> 		 
		<input type="submit" name="on" id="on" value="ON" /> 
	</form>
	<br>
	<form action="" method="POST" id="form2"> 
		<input type="submit" name="off" id="off" value="OFF" /> 
		
	</form>
	</center>
	
	
</body> 

</html> 