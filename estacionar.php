<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Pricing example · Bootstrap v4.6</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/pricing/">

    

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
    </style>

    
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
    
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="#">Features</a>
    <a class="p-2 text-dark" href="#">Enterprise</a>
    <a class="p-2 text-dark" href="#">Support</a>
    <a class="p-2 text-dark" href="#">Pricing</a>
  </nav>
  <a class="btn btn-outline-primary" href="#">Sign up</a>
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Pricing</h1>
  <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
</div>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">PRECIO X HORA</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">HORA <small class="text-muted">$ 180.-</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>10 users included</li>
          <li>2 GB of storage</li>
          <li>Email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">PRECIO ESTADIA</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>20 users included</li>
          <li>10 GB of storage</li>
          <li>Priority email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">PRECIO MENSUAL</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>30 users included</li>
          <li>15 GB of storage</li>
          <li>Phone and email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
      </div>
    </div>
  </div>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="data:image/png;base64,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" alt="" width="24" height="24">
        <small class="d-block mb-3 text-muted">&copy; 2017-2021</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Cool stuff</a></li>
          <li><a class="text-muted" href="#">Random feature</a></li>
          <li><a class="text-muted" href="#">Team feature</a></li>
          <li><a class="text-muted" href="#">Stuff for developers</a></li>
          <li><a class="text-muted" href="#">Another one</a></li>
          <li><a class="text-muted" href="#">Last time</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Resource</a></li>
          <li><a class="text-muted" href="#">Resource name</a></li>
          <li><a class="text-muted" href="#">Another resource</a></li>
          <li><a class="text-muted" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Team</a></li>
          <li><a class="text-muted" href="#">Locations</a></li>
          <li><a class="text-muted" href="#">Privacy</a></li>
          <li><a class="text-muted" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
</div>


    
  </body>
</html>
