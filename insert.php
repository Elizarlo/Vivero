<?php
 // Credenciales
 $dbhost = "localhost";
 $dbuser = "Karen";
 $dbpass = "password";
 $dbname = "datos";
 //Conexion con la base de datos
 $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
?>

<?php

 echo "Pagina para subir los datos<br />";
$dia = 1;
$min = 0;
$hora = 0;

for ($i = 0; $i < 0; $i++){
	$randomFloat = rand(0, 10) / 10;
	$temperatura =  rand(25, 30) + $randomFloat;
	$randomFloat = rand(0, 10) / 10;
	$humedad =  rand(45, 50) + $randomFloat;
	$timestamp = date('Y-m-d G:i:s', mktime($hora, $min, 0, 3, $dia, 2019));
	$min++;
	if($min == 59){
		$hora++;
		$min = 0;
	}
	if($hora == 24){
		$hora = 0;
		$dia++;
	}
	$query = "INSERT INTO Valores VALUES (0,'$timestamp','$temperatura','$humedad')";
	 mysqli_query($con, $query);

}


 mysqli_close($con);
?>
