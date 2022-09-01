<?php

 

$username = "root";
$password = "";
$server = 'localhost';
$db = 'shahadev2';

$con = mysqli_connect($server,$username,$password,$db);

//$db = mysqli_select_db($con,$database);
if($con){
	// echo "connection successfull";
	?>
	<!-- <script>
		alert('connection successful')
	</script> -->
	<?php 
}else{
	echo "no connection";
	die("no connection" .mysqli_connect_error());
}




?>