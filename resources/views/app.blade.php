<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Aqui va el link del arivo css, por ahora es un CDN de bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Proyecto Laravel</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://img.icons8.com/external-icongeek26-linear-colour-icongeek26/344/external-deer-animal-faces-icongeek26-linear-colour-icongeek26.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
        Laravel
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tareas">Tareas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Otro</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!--Aqui va un contenedor con el contenido que se va a renderizar-->
<div class="container mt-5">
  <!-- yield renderiza un view -->
  @yield('Content')
</div>

<!-- Aqui va la ruta del JS para que funcionen animaciones y acciones de bootstrap, tambien es un CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>