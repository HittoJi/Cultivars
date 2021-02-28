<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="{{ asset('css/estils.css') }}" rel="stylesheet" />
           
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <style>
      .scrollable-menu {
        height: auto;
        max-height: 200px;
        overflow-x: hidden;
      }
      body{
        /* background:linear-gradient(110deg, #fdcd3b 60%, #ffed4b 60%); */
      }
    </style>
    
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-success">
    <a class="navbar-brand" href="<?php echo 'http://'.$_SERVER['SERVER_NAME']?>:4000/index.php">Cultivars</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="<?php echo 'http://'.$_SERVER['SERVER_NAME']?>:4000/views/tienda.php">Tienda</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li> -->
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo 'http://'.$_SERVER['SERVER_NAME']?>:4000/views/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo 'http://'.$_SERVER['SERVER_NAME']?>:4000/index.php">Cerrar Sesion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo 'http://'.$_SERVER['SERVER_NAME']?>:4000/index.php">Cesta</a>
        </li>
      </ul>
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
</nav>