<!doctype html>
<html lang="en">

<head>
  <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@700&display=auto" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.80.0">
  <!--<title>Estacionamiento Scorpions</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/jumbotron/">-->
  <?php
    include_once ('titulo.php');

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
    .display-3{
    font-family:'Oxygen', sans-serif;
    font-size:4.2rem ;
    padding: 30px 20px 30px 20px; 
    margin:0 auto;
    color: white;
    border-radius: 10px;
    border-width: 50px;
    line-height: 80px;
    text-shadow:5px 5px 5px rgb(134, 201, 240) ;
    letter-spacing: 1px;
    
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="jumbotron.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">•Estacionamiento Scorpions•</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
          <a class="nav-link" href="estacionar.php">Estacionar<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registro.php">Registro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="error.php">Testing error</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <main role="main">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Bienvenidos!</h1>
        <p><li>En esta demo vamos a ver una aplicación basica para “Control de Estacionamiento”.</li><li> Esta nos sirve para poder controlar el tiempo, básicamente, que un auto está detenido dentro de nuestro estacionamiento.</li><li> Y por supuesto, nos permite cobrar por el servicio e imprimir el ticket.
        <li>Esperamos les guste la idea!!</li></p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Mas Detalles &raquo;</a></p>
      </div>
    </div>
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Heading</h2>
            <li>"La única forma de hacer un trabajo excelente es haciendo lo que amas". Steve Jobs </li>
            <li>"Puede que debas pelear una batalla más de una vez para ganarla". Margaret Thatcher </li>
            <li>"Te conviertes en aquello en lo que crees". Oprah Winfrey </li>
            <li>"La felicidad no es algo hecho. Viene de nuestras acciones". Dalai Lama </li>
            <li>"Si ves a alguien sin una sonrisa, dale la tuya". Dolly Parton </li>
            <li>"La vida es muy interesante... Al final, algunas de las cosas que más nos lastiman se convierten en nuestras mayores fortalezas". Drew Barrymore </li>
            <li>"Si amas la vida, no pierdas el tiempo, ya que de tiempo está hecha la vida". Bruce Lee </li>
            <li>"La vida es eso que te sucede mientras estás ocupado haciendo otros planes". John Lennon </li>
            <li>"Con el tiempo, la fama se me va a escapar. Se escapa de todos y lo único que te queda al final es la posibilidad de mirar atrás y ver las decisiones que tomaste". Matt Damon </li>
            <li>"Todos seguimos soñando y, por suerte, los sueños sí se hacen realidad". Katie Holmes </li>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Standing on the frontline when the bombs start to fall. Heaven is jealous of our love, angels are crying from up above. Can't replace you with a million rings. Boy, when you're with me I'll give you a taste. There’s no going back. Before you met me I was alright but things were kinda heavy. Heavy is the head that wears the crown.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Playing ping pong all night long, everything's all neon and hazy. Yeah, she's so in demand. She's sweet as pie but if you break her heart. But down to earth. It's time to face the music I'm no longer your muse. I guess that I forgot I had a choice.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>
      <hr>
    </div> <!-- /container -->
  </main>
  <footer class="container">
    <p>&copy; Company 2017-2021</p>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>