<?php
$servidor = "localhost";
$Usuario = "root";
$Password = "";
$BD = "dlyp07";
$conec = mysqli_connect($servidor,$Usuario,$Password,$BD );
if($conec->connect_error){
die('error al conectar la base de datos'.$conec->connect_erron);

}
else{
   // echo"se conecto";
}
?>