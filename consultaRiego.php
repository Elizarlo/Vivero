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
	echo "Bienvenido";
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
	echo "entre";
	 echo "Dia = $row['dia'] ,";
	 echo "Hora = $row['hora'] ,";
	echo "Duracion = $row['duracion'] <br />";	 
    }
} else {
    echo "0 results";
}

 mysqli_close($con);
?>
