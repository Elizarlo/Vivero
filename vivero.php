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
 //https://amestris.me/Vivero/vivero.php?Temperatura=50&Humedad=44
 //Importamos la configuracion
 // Leemos los valores que nos llegan por GET
 $Temperatura = mysqli_real_escape_string($con, $_GET['Temperatura']);
 $Humedad = mysqli_real_escape_string($con, $_GET['Humedad']);
 // EInsertamos los valores en la tabla
 $timestamp = date('Y-m-d G:i:s');
 $query = "INSERT INTO Valores VALUES(0,'$timestamp','$Temperatura','$Humedad')";
 // Ejecutamos la instruccion
 mysqli_query($con, $query);
 mysqli_close($con);
 echo "Pagina para subir los datos<br />";
 echo "<br />Temperatura = $Temperatura ºC<br />";
 echo "<br />Humedad = $Humedad %<br />";
?>
