<?php

include "includes/Conecta.php";


if(isset($_POST['inicio'])){


    $us=$conec->real_escape_string($_POST['usuario']);
    $pas=$conec->real_escape_string($_POST['password']);
    
	$consel="SELECT * FROM usuarios WHERE Nick='$us' and Password = '$pas'";
    if($resultado=$conec->query($consel)){
        while($row=$resultado->fetch_array()){
            $userok =$row['Nick'];
            $passok =$row['Password'];

        }
        $resultado->close();

    }
    $conec->close();
      if(isset($us)  && isset($pas)){
          if($us==$userok && $pas== $passok){
            $_SESSION['login']= TRUE;
            $_SESSION['Usuario']= $usuario;

            header("location:esc.html");
        }
        else{
            
            
            header("location:recuperar.html");
        
       }
    }


}






?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


	<title>Login</title>
</head>
<body>
	<div class="text-center">
		<img  src="img/vfast.jpg"  class="text-center" width="35%" height="30%" >
	</div>
	<div class="row justify-content-center h-100 ">
		<div class="col-sm-8 col-md-6 rounded">
			<div class="row">
				<div class="col-sm-10 col-md-12 col-lg-12">
					<!-- Comienso del form -->

					<form  method="post"  action="<?php echo $_SERVER['PHP_SELF'];?>">
						<div class="input-group mb-3">
							
							<input type="text" name="usuario" class ="form-control" placeholder ="Usuario" aria-label ="Username" aria-describedaby="Usuario" required>
							

						</div>
						
						<div class="input-group mb-3">
							
							<input type="password" name="password" class ="form-control" placeholder ="Password" aria-label ="Pass" aria-describedaby="Pass" required>
							
							
						</div>
                        <div class="d-grid gap-2">
                        	
							<button class="btn btn-danger" type="submit" Value="entrar" name="inicio" onclick="validar()";>Iniciar Sesion</button>
                        </div>

					</form>
					<!-- Termino del form-->

				</div>
				
			</div>
            <div class="container text-center">
            

		</div>
		

	</div>



<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>