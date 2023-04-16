<?php
  $ruta_base = '';
  $current_page = 'inicio';
  include("components/head.php");
  include("components/navbar.php");
?>
  <div class="votos">
    <?php 
      include("components/concursoCard.php");
        echo votos__card("nes.png","nes", $ruta_base);
        echo votos__card("gameboy.png","gameboy", $ruta_base);
        echo votos__card("n64.png","n64", $ruta_base);
    ?>
  </div>
  

<?php
  include("components/footer.php");
?>