<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>1958 STAR</title>
  <?php
  if (isset($ruta_base)) {
    echo '<link rel="stylesheet" href="'. $ruta_base . 'src/styles/main.css">';
    echo '<link rel="stylesheet" href="'. $ruta_base . 'src/styles/navbar.css">';
    echo '<link rel="stylesheet" href="'. $ruta_base . 'src/styles/footer.css">';
  } else {
    echo '<link rel="stylesheet" href="src/styles/main.css">';
    echo '<link rel="stylesheet" href="src/styles/navbar.css">';
    echo '<link rel="stylesheet" href="src/styles/footer.css">';
  }
  ?>
  <script src="https://kit.fontawesome.com/ee9a0937c2.js" crossorigin="anonymous"></script>
</head>
<body>

