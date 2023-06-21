<?php
    include_once ('titulo.php');

    ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php //nombre red social ?> Registro</title>
  <link rel="stylesheet" href="./css/index.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
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
    display: inline;
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
    <a class="text" >•Estacionamiento Scorpions App•</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="boton">
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <div class="botonsep">
      <li class="nav-item">
        
        
        </li>
        </div>
        <li class="nav-item">
          <div class="botonsep">
           <a class="btn btn-outline-success my-2 my-sm-0" href="index.php">Volver</a>
        </li>
      </ul>
    </div>
  </div>
  </nav>
</div>

<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href=""><b>BLOG</b>CLIENTE</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Por favor dejá tus datos de ser necesario nos contactaremos, gracias </p>

    <form action="ClienteBlogHacer.php" method="post">
      <div class="form-group has-feedback">
      Fecha del mensaje <input name="fecha" type="text" class="form-control" value ='<?php date_default_timezone_set("America/Argentina/Buenos_Aires");echo date("Y-m-d H:i"); ?>' readonly>
      </div> 
      <div class="form-group has-feedback">
        <input type="text" name="nombre" class="form-control" placeholder="Nombre completo"  required>
        <span class="glyphicon glyphicon-star form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email"  required>  
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="instagram" class="form-control" placeholder="Instagram"  required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      
      <div class="form-group has-feedback">
        <input type="text" name="telefono" class="form-control" placeholder="Telefono" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <p><label> Seleccione un tema </label><br/>
<span class="wpcf7-form-control-wrap radio-631"><span class="wpcf7-form-control wpcf7-radio"><span class="wpcf7-list-item first"><label><span class="wpcf7-list-item-label">Barreras</span><input type="radio" name="radio-631" value="Barreras" /></label></span><span class="wpcf7-list-item"><label><span class="wpcf7-list-item-label">Molinetes</span><input type="radio" name="radio-631" value="Molinetes" /></label></span><span class="wpcf7-list-item"><label><span class="wpcf7-list-item-label">Sistemas de Parking</span><input type="radio" name="radio-631" value="Sistemas de Parking" /></label></span><span class="wpcf7-list-item"><label><span class="wpcf7-list-item-label">Control de Acceso</span><input type="radio" name="radio-631" value="Control de Acceso" /></label></span><span class="wpcf7-list-item last"><label><span class="wpcf7-list-item-label">Otros</span><input type="radio" name="radio-631" value="Otros" checked="checked" /></label></span></span></span></p>
      <div class="form-group has-feedback">
        <p><label> Dejenos su Consulta o mensaje<br />
        <span class="wpcf7-form-control-wrap your-message"><textarea name="comentario" cols="38" rows="8" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </label></p>
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
          <button type="submit" name="registrar" class="btn btn-primary btn-block btn-flat">Enviar</button>
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
</html>
