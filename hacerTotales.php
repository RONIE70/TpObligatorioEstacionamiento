<?php
include "funciones.php";
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
      <a class="btn btn-outline-primary" href="hacerContable.php">Informe Contable</a>
    </nav>
    <!--<a class="btn btn-outline-primary" href="login.php">Login</a>-->
  </div>
  <div id="pres">
  <p>TOTAL RECAUDADO HASTA EL MOMENTO</p>
  <p>
    <?php
    echo "USUARIO LOGUEADO ACTUALMENTE: ".$_COOKIE["USUARIO"];
    ?>
  </p>
  </div>
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h2 class="display-4">Estacionamiento ScorpionsApp</h2>
    <div id="lead">
    <p><li> En esta pantalla el usuario podra visualizar el total recaudado hasta el momento</li></p>
  </div>
  </div>
  <div class="container">
    <div id="precio" class="card-deck mb-3 text-center">
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0-font-weight-normal">TOTAL DE TICKETS EMITIDOS</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title-pricing-card-title">Verificación<small class="text-muted">/CAJA</small></h1>
          <button id="btnregistrar" type="submit" class="btn_send">Total Recaudado</button> -->
              <?php
              $total=CalcularTotales("cobrados.txt");
              echo "Caja $ ".$total;
              ?>
        </div>
      </div>
      <!--<div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0-font-weight-normal">Precio Hora</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title-pricing-card-title">$280<small class="text-muted">/ 60 min</small></h1>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0-font-weight-normal">Precio Estadía</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title-pricing-card-title">$2200 <small class="text-muted">/ 12 hs</small></h1>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col">
            <form action="hacerentradapatente.php" method="post">
              <div class="form-group1">
                <h1>ENTRADA</h1>
                <input name="patente" class="form-control form-control-lg form-pat" type="text" placeholder="Ingresar Patente">
                <select name="cboColor" class="form-control form-control-lg form-pat">
                  <option value="rojo">blanco</option>
                  <option value="azul">azul</option>
                  <option value="negro">negro</option>
              </select>
              </div>
              <button id="btnregistrar" type="submit" class="btn_send">Estacionar</button>
              <div id="tablestop">
              <1?php include ('tablaestacionados.php'); ?>
            </div>
            </form>
          </div>
          <div class="col">
          <form action="hacersalidapatente.php" method="post">
              <div class="form-group2">
                <h1>SALIDA</h1>
                <input name="patente" class="form-control form-control-lg form-pat" type="text" placeholder="Ingresar Patente">
              </div>
              <button id="btnregistrar" type="submit" class="btn_send">Cobrar</button>
              <div id="tablestop">
              <1?php include ('tablacobrados.php'); ?>
            </div>
              </form> 
              <div id="ticketver">
             <1?php include ('ultimoTicket.php'); ?>
            </div>
            <form action="hacerTotales.php" method="post">
              <div class="form-group2">
                <h1>total $</h1>
                </div>
              <button id="btnregistrar" type="submit" class="btn_send">Total Recaudado</button>
              
              </div>
            </form> 
          </div>
        </div>
      </div>
    </div>-->
    
    
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