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
 $query = "SELECT * FROM Valores order by id DESC LIMIT 1";
 // Ejecutamos la instruccion
$result =  mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
	 echo "Tiempo = $row['tiempo'] <br />";
	 echo "Temperatura = $row['temperatura'] <br />";
	echo "Humedad = $row['humedad'] <br />";	 
    }
} else {
    echo "0 results";
}

 mysqli_close($con);
?>
