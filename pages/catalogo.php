<?php
  $ruta_base = '../';
  $current_page = 'catalogo';
  include("../components/head.php");
  include("../components/navbar.php");
?>
<div class="catalogo__reco">
  <?php 
    include("../components/recoCard.php");
    echo recoCard($ruta_base);
    echo recoCard($ruta_base);
    echo recoCard($ruta_base);
  ?>
</div>


<div class="catalogo__galeria">
  <?php 
    include("../components/productPrice.php");
    echo catalogo__card("1990","Super Nintendo","super-nintendo.png","85,00", $ruta_base);
    echo catalogo__card("1998","GameBoy Pocket","gameboy.png","68,00", $ruta_base);
    echo catalogo__card("2001","Nintendo 64","n64.png","72,50", $ruta_base);
    echo catalogo__card("1986","Nintendo NES","nes.png","53,50", $ruta_base);
    echo catalogo__card("1990","Super Nintendo","super-nintendo.png","85,00", $ruta_base);
    echo catalogo__card("1998","GameBoy Pocket","gameboy.png","68,00", $ruta_base);
    echo catalogo__card("2001","Nintendo 64","n64.png","72,50", $ruta_base);
    echo catalogo__card("1986","Nintendo NES","nes.png","53,50", $ruta_base);
  ?>
</div>

<?php include("../components/footer.php");?>