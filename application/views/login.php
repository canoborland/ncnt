<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
<style>
body{
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00589F', endColorstr='#0073CF', GradientType=0);
  background: -webkit-linear-gradient(to bottom, #00589F 50%, #0073CF) !important;
  background: -moz-linear-gradient(to bottom, #00589F 50%, #0073CF) !important;
  background: -ms-linear-gradient(to bottom, #00589F 50%, #0073CF) !important;
  background: -o-linear-gradient(to bottom, #00589F 50%, #0073CF) !important;
  background: linear-gradient(to bottom, #00589F 50%, #0073CF) !important;
  color: white;
}

div.well{
  height: 250px;
} 

.Absolute-Center {
  margin: auto;
  position: absolute;
  top: 0; left: 0; bottom: 0; right: 0;
}

.Absolute-Center.is-Responsive {
  width: 50%; 
  height: 50%;
  min-width: 200px;
  max-width: 400px;
  padding: 40px;
}

#logo-container{
  margin: auto;
  margin-bottom: 10px;
  width:200px;
  height:30px;
  /* background-image:url();*/
}
</style>

</head>
<body>


<div class="container">
  <div class="row">
    <div class="Absolute-Center is-Responsive">
      <!--<div id="logo-container"></div>-->
      <div class="col-sm-12 col-md-10 col-md-offset-1">
        <form action="" id="loginForm">
          <div class="form-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input class="form-control" type="text" name='username' placeholder="Correo"/>          
          </div>
          <div class="form-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input class="form-control" type="password" name='password' placeholder="Contraseña"/>     
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox">Recordar
            </label>
          </div>
          <div class="form-group">
            <button type="button" class="btn btn-lg btn-primary btn-block">Iniciar Sesión</button>
          </div>
          <div class="form-group text-center">
            <a href="#">Olvido contraseña</a>&nbsp;|&nbsp;<a href="#">Login</a>
          </div>
        </form>        
      </div>  
    </div>    
  </div>
</div>

<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>