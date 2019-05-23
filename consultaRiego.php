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

 // Consultar los datos
 $query = "SELECT * FROM riego order by dia";
 // Ejecutamos la instruccion
$result =  mysqli_query($con, $query);
$datos= array();
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
//	 echo "Dia = ".$row['dia'] .",";
//	 echo "Hora = ".$row['hora'] .",";
	//echo "Duracion = ". $row['duracion']." <br />";
  $datos[]=array(
        'Dia'=>$row['dia'],
        'Hora'=> $row['hora'] ,
        'Duracion'=> $row['duracion']);


	}
  $respuesta=array(
	'Datos' =>
	   $datos
    );
      header('Content-Type: application/json');
	    echo json_encode($respuesta);
} else {
    echo "0 results";
}

 mysqli_close($con);
?>
