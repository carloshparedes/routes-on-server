<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  body {
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 14px;
    background-color: aliceblue;
  }

  #wrapper {
    background-color: white;
    margin: auto;
    margin-top: 15px;
    display: flex;
    padding: 15px;
    width: 50%;
    height: 100%;
    border: 1px solid #B5B2B2;
    border-radius: 10px;
    z-index: 1;
    flex-wrap: wrap;
    justify-content: space-around;

  }

  #header {
    display: flex;
    margin: 10px;
    width: 100%;
    height: auto;
    justify-content: space-between;
    align-items: center;
    gap: 15px;
    text-align: center;
  }

  #section {
    display: flex;
    margin: 10px;
    width: 100%;
    justify-content: space-evenly;
    align-items: center;
  }

  .rutaImage {
    width: 300px;
    height: 250px;
  }

  .iconImage {
    width: 40px;
    height: 40px;
  }

  #content {
    display: flex;
    flex-direction: row;
    gap: 23px;
  }

  #footer {
    display: flex;
    width: 100%;
    margin-top: 16px;
    justify-content: flex-end;
  }

  p {
    margin: 0;
  }

  p.subtitle {
    text-align: center;
    color: gray;
  }

  h1 {
    text-align: center;
    margin: 0;

  }

  h2 {
    margin: 0;
  }

  a {
    text-decoration: none;
  }

  a {
    background: #fff;
    /* color de fondo */
    color: #4741d7;
    /* color de fuente */
    border: 2px solid #4741d7;
    /* tamaño y color de borde */
    padding: 16px 20px;
    border-radius: 3px;
    /* redondear bordes */
    position: relative;
    z-index: 1;
    overflow: hidden;
    display: inline-block;
  }

  a:hover {
    color: #fff;
    /* color de fuente hover */
  }

  a::after {
    content: "";
    background: #4741d7;
    /* color de fondo hover */
    position: absolute;
    z-index: -1;
    padding: 16px 20px;
    display: block;
    left: 0;
    right: 0;
    top: -100%;
    bottom: 100%;
    -webkit-transition: all 0.35s;
    transition: all 0.35s;
  }

  a:hover::after {
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    -webkit-transition: all 0.35s;
    transition: all 0.35s;
  }
  </style>
  <title>Rutas</title>
</head>

<body>
  <h1>Trails of the World</h1>
  <p class="subtitle">discover and share the best outdoor trails for hiking, cycling and many other activities</p>
  <?php
  $listaRutas = simplexml_load_file("rutas.xml");

  foreach ($listaRutas as $ruta) {
    $traslado = 'images/' . $ruta->traslado . '.png';
    $medio = $ruta->traslado['medio'];
    $nombre = $ruta->nombre;
    $ubicacion = $ruta->ubicacion;
    $distancia = $ruta->distancia;
    $elevacion = $ruta->elevacion;
    $dificultad = $ruta->elevacion['dificultad'];
    $imagen = 'images/' . $ruta->imagen . '.jpg';
    $descripcion = $ruta->descripcion;
    $archivo = 'images/' . $ruta->archivo;
  ?>
  <div id="wrapper">
    <div id="header">
      <img class="iconImage" src="<?= $traslado ?>" alt="">
      <p><?= $medio ?></p>
      <h2><?= $nombre ?></h2>
      <p><?= $ubicacion ?></p>
    </div>
    <div id="section">
      <p>Distancia
      <h3><?= $distancia ?></h3>
      </p>Elevación
      <h3><?= $elevacion ?></h3>
      <?= $dificultad ?>
      </p>
    </div>
    <div id="content">
      <img class="rutaImage" src="<?= $imagen ?>" alt="">
      <p><?= $descripcion ?></p>
    </div>
    <div id="footer">
      <a href="<?= $archivo ?>" download>Descargar Ruta ⬇</a>
    </div>
  </div>
  <?php
  }
  ?>
</body>

</html>