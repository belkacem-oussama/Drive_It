<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Drive it !</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Drive it !</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Commandes
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/order_current">en cours</a></li>
              <li><a class="dropdown-item" href="/order_to_come">à venir</a></li>
              <li><a class="dropdown-item" href="/order_finish">clôturées</a></li>
              <li><a class="dropdown-item" href="/order_new">ajouter une commande</a></li>
            </ul>
          </li>
          <a class="nav-link" aria-current="page" href="/available">Disponibilité</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/cars">Flotte</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dealer">Concessions</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>