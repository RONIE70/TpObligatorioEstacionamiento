<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    
    <?php
    include_once ('titulo.php');

    ?>
    <link rel="stylesheet" type="text/css" href="./css/registro.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
    </head>

<?php
    include_once ('titulo.php');

    ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php //nombre red social ?> Registro</title>
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

<style>
  element.style {
    position: absolute;
    top: -20%;
    left: -20%;
    display: block;
    width: 140%;
    height: 140%;
    margin: 0px;
    padding: 0px;
    background: rgb(255, 255, 255);
    border: 0px;
    opacity: 0;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
ins {
    text-decoration: underline;
}
.icheckbox_square-blue, .iradio_square-blue {
    display: inline-block;
    *display: inline;
    vertical-align: middle;
    margin: 0;
    padding: 0;
    width: 22px;
    height: 22px;
    background: url(blue.png) no-repeat;
    border: none;
    cursor: pointer;
}
.checkbox label, .radio label {
    min-height: 20px;
    padding-left: 20px;
    margin-bottom: 0;
    font-weight: 400;
    cursor: pointer;
}
label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
}
user agent stylesheet
label {
    cursor: default;
}
.login-box-body, .register-box-body {
    background: #fff;
    padding: 20px;
    border-top: 0;
    color: #666;
}
body {
    font-family: 'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif;
    font-weight: 400;
    overflow-x: hidden;
    overflow-y: auto;
}
body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    background-color: #fff;
}
html {
    font-size: 10px;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
}
html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}
:after, :before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
:after, :before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

  .img{
      position: relative;
      top:-10px;
      margin-left: 30px;
    }
  #boton{
position: relative;
 right: -290px;

}
.botonsep{
  position: relative;
  top:-5px;
  padding: 20px;
}
.text{
  font-family:'Oxygen', sans-serif;
  color: white;
font-size:1.8rem ;
}
</style>
</head>
<div id="body">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <img class= "img" src="./icon/portada.png" height="100">
    <a class="text" ><img class= "img" src="./icon/portada.png" height="100">Estacionamiento Scorpions App</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="boton">
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <div class="botonsep">
      <li class="nav-item">
        
          <a class="btn btn-outline-success my-2 my-sm-0" href="index.php">Salir</a>
        
        </li>
        </div>
        <li class="nav-item">
          <div class="botonsep">
          <a class="btn btn-outline-success my-2 my-sm-0" href="login.php">Login</a></div>
        </li>
      </ul>
    </div>
  </div>
  </nav>
</div>

<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href=""><b>REGISTRO</b>USUARIO</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Los datos ingresados los debera utilizar para loguearse en el sistema</p>

    <form action="registroHacer.php" method="post">
      
      <div class="form-group has-feedback">
        <input type="text" name="nombre" class="form-control" placeholder="Nombre"  required>
        <span class="glyphicon glyphicon-star form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" name="correo" class="form-control" placeholder="Email"  required>  
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="pass" class="form-control" placeholder="Password"  required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      
      <div class="form-group has-feedback">
        <input type="password" name="copiapass" class="form-control" placeholder="Repetir password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="rol_id" class="form-control" placeholder="ID Rol"  required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      
      <div class="row">
        <div class="col-xs-10">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="check" required> Acepto los <a href="https://www.argentina.gob.ar/terminos-y-condiciones#9">términos y condiciones</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" name="registrar" class="btn btn-primary btn-block btn-flat">Alta</button>
        </div>
        <!-- /.col -->
      </div>
    </form>



    <br>
    <a href="login.php" class="text-center">Tengo actualmente una cuenta</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
<p class="mt-5 mb-3 text-muted">&copy; ScorpionsApp 2021</p>

</html>



 <!-- <body class="text-center">
    
<form id="form" class="form-signin" action="registroHacer.php" method="post">
  <a href="/"><img class="mb-4" src="https://image.flaticon.com/icons/png/512/753/753210.png" alt="" width="90" height="90"></a>
  <h1 class="h3 mb-3 font-weight-normal">REGISTRO DE USUARIO</h1>
  <label for="inputEmail" class="sr-only">Nombre</label>
  <input name="nombre" type="input" id="inputNombre" class="form-control" placeholder="Nombre" required autofocus>
  <label for="inputEmail" class="sr-only">Email</label>
  <input name="correo" type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
  <label for="inputPassword" class="sr-only">Contraseña</label>
  <input name="pass" type="password" id="inputEmail" class="form-control" placeholder="Password" required autofocus>
  <label for="inputPassword" class="sr-only">Copia de Contraseña</label>
  <input name="copiapass"type="password" id="inputPassword" class="form-control" placeholder="Repetir Password" required>
  <button class="btn btn-lg btn-primary btn-block" type="submit">ALTA</button>
  <p class="mt-5 mb-3 text-muted">&copy; ScorpionsApp 2021</p>
</form>
    
  </body>
</html>-->