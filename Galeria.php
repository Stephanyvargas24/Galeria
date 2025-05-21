<?php
if (isset($_GET['img'])) {
    $imagen = basename($_GET['img']);
} else {
    $imagen = 'default.jpg';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Imagen Grande</title>
  <style>
    body {
      background-image: url('galaxia.gif');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      margin: 0;
      padding: 40px;
      box-sizing: border-box;
      color: white;
      font-family: Arial, sans-serif;
      text-align: center;
    }

    .contenedor-imagen {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 60vh; 
    }

    img {
      width: 40%;      
      height: auto;
      border: 5px solid white;
      border-radius: 10px;
      box-shadow: 0 0 15px white;
      margin: 10px;
    }

    a {
      display: block;
      margin-top: 10px;
      color: white;
      font-size: 1.2em;
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="contenedor-imagen">
    <img src="<?php echo $imagen; ?>" alt="Imagen grande">
  </div>
  <a href="Practica3_Galeria.html">Volver a la galería</a>
</body>
</html>
