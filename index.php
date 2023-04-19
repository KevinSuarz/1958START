<?php
  $ruta_base = '';
  $current_page = 'inicio';
  include("components/head.php");
  include("components/navbar.php");
?>
  <div class="votos">
    <div class="votos__votacion">
      <?php 
        include("components/concursoCard.php");
          echo votos__card("nes.png","nes", $ruta_base);
          echo votos__card("gameboy.png","gameboy", $ruta_base);
          echo votos__card("n64.png","n64", $ruta_base);
      ?>
    </div>
    <?php
      include("components/button.php");
          echo btn("votos__submit", "ENVIAR", "abrirform", "btn__red", $ruta_base, "txtb");
    ?>
  </div>
  
<?php
  include("components/footer.php");
?>