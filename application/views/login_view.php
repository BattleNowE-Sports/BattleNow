<!DOCTYPE html>
<html>
<head>
	<title>Registro / Login</title>
</head>
<body>
  <br>
  <div class="container">
  	<div class="row">
     <div class="col-sm-6">
       <h3 class="d-flex justify-content-center">¿No tienes cuenta? Registrate aquí</h3>
       <p class="d-flex justify-content-center">Descubre las ventajas de estar registrado en #BattleNow</p>
       <hr>
       <br><br>
       <form action='<?php echo base_url()."index.php/Home/registrarBD"?>' method="post"> 
       <div class="form-row">
       <label>Usuario</label>
       <input type="text" name="user" class="form-control">
       <br><br>
       <label>Correo</label>
       <input type="text" name="correo" class="form-control">
       <br><br>
       <label>Contraseña</label>
       <input type="Password" name="contra" class="form-control">              
       </div>
       <br><br><br>
       <center><input type="submit" class="btn btn-primary btn-lg disabled" value="Registrarte!"></center>
       </form>
       <br>
       <?php
        $confirm = $this->session->flashdata('Corre');
        $mal = $this->session->flashdata('ErrorAn');
        echo $confirm;
        echo $mal;
        ?>
     </div>
     <div class="col-sm-6">
       <h3 class="d-flex justify-content-center">Iniciar Sesion</h3>
       <br>
       <p></p>
       <hr>
       <br><br> 
       <form action='<?php echo base_url()."index.php/Home/loginBD"?>' method="post">
       <div class="form-row">
       <label>Usuario o Correo</label>
       <input type="text" name="ucher" class="form-control">
       <br><br>
       <label>Password</label>
       <input type="Password" name="pass" class="form-control">
       </div>
       <br>
       <h5>¿Que has usado para iniciar sesion?</h5>
       <select name="modo" class="form-control">
       	  <option value="corr">Correo</option>
          <option value="usu">Usuario</option>
       </select> 
       <br><br>
       <center><input type="submit" class="btn btn-primary btn-lg disabled" value="Iniciar Sesion"></center>          
       </form>               	
     </div>
  	</div>
  </div>
</body>
</html>