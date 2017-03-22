<?php
	//echo "Respuesta por parte del servidor";
include "conexion.php";
$Id=$_POST["ID"];
$nom=$_POST['Nom'];
$dir=$_POST['Dir'];
$rfc=$_POST['RFC'];
$tel=$_POST['Tel'];
$clasif=$_POST['Clas'];
$foto=$_POST['Foto'];
$lat=$_POST['Lati'];
$longit=$_POST['Long'];

$sql="UPDATE Servicios SET Nombre_servicio='$nom', Direccion='$dir', RFC='$rfc', Telefono='$tel', Clasificacion='$clasif', Foto='$foto',Latitud='$lat', Longitud='$longit' where id_servicio=$Id";
$reg=mysqli_query($conn, $sql);

if($reg){
	echo "Nom:".$nom." Dir:".$dir." RFC:".$rfc." Tel:".$tel."Clas".$clasif." Tomar:".$foto." Lati:".$lat." Long:".$longit;
}else{
	echo "Error actualizar datos:".mysqli_error();
}
mysql_close($conn);
	
	?>