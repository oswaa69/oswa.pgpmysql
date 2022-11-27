<?php

include "includes/Conecta.php";
include "includes/conres.php";




?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
	<title>formulario</title>
</head>
<body>

				  	 <!--Empieza Formulario-->
                    <form   name="login"  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
					
						
                        <div class="input-group mb-3">
							
							<input type="text" name="nombre" class ="form-control" placeholder ="Nombre(s)"  required>
							
							
						</div>
						<div class="input-group mb-3">
							
							<input type="text" name="app" class ="form-control" placeholder ="Apellido Paterno"  required>
							
                        </div>
                        <div class="input-group mb-3">
						
							<input type="text" name="apm" class ="form-control" placeholder ="Apellido Materno" required>
						

						</div>

						<div class="input-group mb-3">
							
							<input type="gmail" name="email" class ="form-control" placeholder ="Gmail"  required>
						

						</div>


						<div class="input-group mb-3">
							
							<input type="text" name="nick" class ="form-control" placeholder ="Nickname"  required>
						

						</div>



						<div class="input-group mb-3">
						
							<input type="password" name="password" class ="form-control" placeholder ="Password" required>
							

						</div>
					
						   

                        <div class="d-grid gap-2">
                        	<button class="btn btn-outline-danger btn-sm " type="submit" name="registro" > Inicio </button>
                        </div>
                        

					</form>
				




<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>