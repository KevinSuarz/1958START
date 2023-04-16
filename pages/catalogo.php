<?php
  $ruta_base = '../';
  $current_page = 'catalogo';
  include("../components/head.php");
  include("../components/navbar.php");
?>

<div class="catalogo__galeria">
  <?php 
    include("../components/productPrice.php");
    echo catalogo__card("1990","Super Nintendo","super-nintendo.png","85,00", $ruta_base);
    echo catalogo__card("1998","GameBoy Pocket","gameboy.png","68,00", $ruta_base);
    echo catalogo__card("1990","Super Nintendo","super-nintendo.png","85,00", $ruta_base);
    echo catalogo__card("1990","Super Nintendo","super-nintendo.png","85,00", $ruta_base);
  ?>
</div>

<h1>catalogo</h1>

<?php include("../components/footer.php");?>