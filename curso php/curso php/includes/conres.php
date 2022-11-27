<?php
include "Conecta.php";

if(isset($_POST['registro'])){
    
    $nombres= $_POST['nombre'];
    $apellido1= $_POST['app'];
    $apellido2=$_POST['apm'];
    $genero="2";
    $tusuario="1";
    $nickname= $_POST['nick'];
    $correo =$_POST['email'];
    $contraseñas=$_POST['password'];

    $validar="SELECT * FROM usuarios WHERE Email = '$correo' || Nick ='$nickname'";
    $validacon= $conec->query($validar);
    if($validacon->num_rows >0){
        ?>
        <h3 class="ok"> Tu Nickname y/o Correo ya se encuentran registrados </h3>
        <?php

    }
    else{

    

    $conin = "INSERT INTO usuarios ( `Nombre`, `ApellidoP`, `ApellidoM`, `Id_Genero`, `Email`, `Id_Tusuario`, `Nick`, `Password`) VALUES ('$nombres','$apellido1','$apellido2','$genero','$correo','$tusuario','$nickname','$contraseñas')";
    $guarcon = mysqli_query($conec, $conin);
    
    if($guarcon){
        ?>
        <h3 class="ok"> te has inscripto correctamente</h3>
        <?php
    }else {
        ?>
        <h3 class="bad"> ups no te has inscripto correctamente</h3>
        <?php
    
    }
}



  }

	

?>