
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.80.0">
  <!--<title>Estacionar - Estacionamiento Scorpions</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/pricing/">-->
  <?php
    include_once ('titulo.php');
    include_once ("estacionamiento.php");
    estacionamiento::CrearTablaEstacionados("estacionados");
    estacionamiento::CrearTablaEstacionados("cobrados");
   
    ?>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }
    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
    .form-pat {
      text-align: center;
      margin: 0 auto;
      width: 80%;
    }
    .form-group2,#ticketver {
      color:red;
      font-border:black 2px;

    }
    .form-group1{
      color:green;
    }
    .btn_send{
      background-color: cyan;
    }
  button
     {
    color: white;
    font-size:15pt ;
    border-radius: 5px;
    margin: 8px 8px;
    cursor: pointer;
    padding:5px;
    box-shadow: 0px 3px 3px  #fff;
}
#btnregistrar,#btncancelar{
    width: 225px;
    background-color: #1612e9;
}
    .my-0-font-weight-normal{
    background-color: #1612e9;
    color: rgb(247, 38, 38);
    height: 30px;
    font-size:15pt ;
    border-radius: 5px;
    margin: 8px 8px;
    cursor: pointer;
    padding:5px;
    box-shadow: 0px 3px 3px  #fff;
    }

    #body{
      background-color: rgb(228, 228, 228);
    }

    #tablestop{
      padding:5px;
      color:rgb(2, 8, 100);
      left: 65px;
      position: relative;
      top:25px;
      box-shadow: black 1px 1px 4px 2px;
      width: 300px;

    }

    #tablestop2{
      padding:5px;
      color:rgb(2, 8, 100);
      left: 10px;
      position: relative;
      top:25px;
      box-shadow: black 1px 1px 4px 2px;
      width: 450px;
      text-align: center;

    }

    #pres{
    font-family:'Oxygen', sans-serif;
    font-size: 1rem ;
    text-align: center;
    color: white;
    border-radius: 10px;
    border-width: 20px;
    line-height: 35px;
    text-shadow:5px 5px 5px rgb(134, 201, 240) ;
    letter-spacing: 1px;
    background-color: rgb(41, 145, 243);
    }

    .display-4{
      font-size: 2.5rem;
      font-family:'Oxygen', sans-serif;
      position: relative;
      top:-30px;
    }

    #lead{
      position: relative;
      top:-45px;
    }

    .card-body{
      height: 10px;
    }

    .card-title-pricing-card-title{
      font-size:2rem;
      position: relative;
      top:-19px;
    }

    .row {
      position: relative;
      top:20px;
    }

    #precio{
      position: relative;
      top:-42px;
    }

    #ticketver{
      box-shadow: black 1px 1px 4px 2px;
      padding: 0px 3px 5px 5px;
      width: 300px;
      position: relative;
      right:-72px;
      top:20px;
    }
  </style>

  <!-- Custom styles for this template -->
  <link href="pricing.css" rel="stylesheet">
</head>
<body id="body">
     <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h4 class="my-0 mr-md-auto font-weight-normal">Estacionamiento ScorpionsApp</h4>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="btn btn-outline-primary" href="index.php">Pagina Principal</a>
      <a class="btn btn-outline-primary" href="estacionar.php">Estacionar</a>

    </nav>
    <!--<a class="btn btn-outline-primary" href="login.php">Login</a>-->
  </div>
  <div id="pres">
  <p>SISTEMA DE ADMINISTRACION CONTABLE - FACTURACION </p>
  </div>
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h2 class="display-4">Estacionamiento ScorpionsApp</h2>
    <div id="lead">
    <p><li>En esta pantalla el usuario podra ingresar/egresar la patente del cliente</li><li> Se visualiza 1 listado de los vehiculos estacionados con su hora de ingreso</li><li>Otro listado de vehiculos egresados con el importe cobrado en cada caso</li> </p>
  </div>
  </div>
  <div class="container">
    <div id="precio" class="card-deck mb-3 text-center">
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0-font-weight-normal"></h4>
          <form action="hacerTotales.php" method="post">
              <div class="form-group2">
               <h4>TOTALES</h4>
                </div>
              <button id="btnregistrar" type="submit" class="btn_send">Total Recaudado</button>
              
              </div>
            </form> 
        </div>
        <div class="card-body">
          <!--<h1 class="card-title-pricing-card-title">$80<small class="text-muted">/ 15 min</small></h1>-->
         
              
              </div>
            </form> 
              
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0-font-weight-normal">Cobrado Efectivo</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title-pricing-card-title">$280<small class="text-muted">/ 60 min</small></h1>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0-font-weight-normal">Cobrado Tarjetas</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title-pricing-card-title">$2200 <small class="text-muted">/ 12 hs</small></h1>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col">
            <!--<form action="hacerentradapatente.php" method="post">
              <div class="form-group1">
                <h1>ENTRADA</h1>
                <input name="patente" class="form-control form-control-lg form-pat" type="text" placeholder="Ingresar Patente">
                <select name="cboColor" class="form-control form-control-lg form-pat">
                  <option value="rojo">blanco</option>
                  <option value="azul">azul</option>
                  <option value="negro">negro</option>
              </select>
              </div>
              <button id="btnregistrar" type="submit" class="btn_send">Estacionar</button>-->
              <div id="tablestop">
              <?php include ('tablaestacionados.php'); ?>
            </div>
            </form>
          </div>
          <div class="col">
          <!--<form action="hacersalidapatente.php" method="post">
              <div class="form-group2">
                <h1>SALIDA</h1>
                <input name="patente" class="form-control form-control-lg form-pat" type="text" placeholder="Ingresar Patente">
              </div>
              <button id="btnregistrar" type="submit" class="btn_send">Cobrar</button>-->
              <div id="tablestop2">
              <?php include ('tablacobrados.php'); ?>
            </div>
              <!--</form> 
              <div id="ticketver">
             <!-?php include ('ultimoTicket.php'); ?>
            </div-->
            <!--<form action="hacerTotales.php" method="post">
              <div class="form-group2">
                <h1>total $</h1>
                </div>-->
              <!--<button id="btnregistrar" type="submit" class="btn_send">Total Recaudado</button>-->
              
              </div>
            </form> 
          </div>
        </div>
      </div>
    </div>
    
    
   </body> 

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <div class="row">
        <div class="col-12 col-md">
          <small class="d-block mb-3 text-muted">&copy; EscorpionsApp 2021</small>
        </div>
        <div class="col-6 col-md">
          
    </footer>
  </div>
</body>
</html>