<?php
  $ruta_base = '';
  $current_page = 'inicio';
  include("components/head.php");
  include("components/navbar.php");
  include("components/concursoCard.php");
  include("components/button.php");
  include("components/productPrice.php");
  include("components/cartablog.php");

?>
  <a class="whatsappBtn" href="#">
    <img src="src/img/whatsapp.png" alt="botón de whatsapp">
  </a>
  <video src="src/img/herobg.mp4" class="hero__bg" autoplay muted loop>
  </video>
  <div class="hero">
    <h1 class="hero__title mobile txtw">TIENDA RETRO DE</h1>
    <h1 class="hero__title mobile txtw">VIDEOJUEGOS</h1>
    <div class="hero__producto">
      <?php 
        echo votos__card("hero__gameboy.png","nes", $ruta_base, "votado2","disabled"); 
        echo btn("votos__submit desktop", "COMPRA YA!!", "pages/carrito.php", "btn__red", $ruta_base, "txtb");
      ?>
    </div>
    <div class="hero__botones">
      <div class="hero__title desktop">
        <h1 class="hero__title-desktop txtw">TIENDA RETRO DE</h1>
        <h1 class="hero__title-desktop txtw">VIDEOJUEGOS</h1>
      </div>
      <?php 
        echo btn("votos__submit", "CATÁLOGO", "pages/catalogo.php", "btn__red", $ruta_base, "txtb hero__btn");
      ?>
    </div>
    <div class="hero__redes">
      <div class="hero__linea"></div>
      <a href=""><i class="fa-brands fa-tiktok txtw"></i></a>
      <a href=""><i class="fa-brands fa-instagram txtw"></i></a>
      <a href=""><i class="fa-brands fa-facebook-f txtw"></i></a>
    </div>
    
  </div>
  
  <div class="dia">
    <div class="dia__container">
      <div class="dia__producto">
        <h2 class="dia__title">MÁS VENDIDAD HOY</h2>
        <?php 
        echo catalogo__card("1990","Super Nintendo","super-nintendo.png","85,00", $ruta_base);
        echo btn("votos__submit desktop", "COMPRA YA!!", "pages/carrito.php", "btn__red", $ruta_base, "txtb");
        ?>
      </div>
      <div class="dia__blog">
        <h3 class="txtw dia__blog-title">TE GUSTAN LOS VIDEOJUEGOS</h3>
        <P class="txtw">¿Eres todo un gamer? En nuestro blog encontrarás Promociones, curiosidades, datos importantes, estadisticas y todo contenido del mundo gaming</P>
        <div class="dia__blog-card">
          <?php 
          echo cartaBlog("cartaBlog1.jpeg","solo con","xbox",$ruta_base);
          echo cartaBlog("cartaBlog2.jpg","esta bien","xbox",$ruta_base);
        ?>
        </div>
        <?php 
          echo btn("votos__submit desktop", "BLOG", "pages/blog.php", "btn__black", $ruta_base, "txtb");
        ?>
      </div>
    </div>
  </div>

  <div class="votos">
    <h2 class="votaciones__title txtbl">PARTICIPA</h2>
    <h3 class="txtw">¿CUAL CONSOLA ELIGES?</h3>
    <div class="votos__votacion">
      <?php 
          echo votos__card("nes.png","nes", $ruta_base,"","");
          echo votos__card("gameboy.png","gameboy", $ruta_base,"","");
          echo votos__card("n64.png","n64", $ruta_base,"","");
      ?>
    </div>
    <?php
          echo btn("votos__submit", "ENVIAR", "abrirform", "btn__red", $ruta_base, "txtb");
    ?>
    <P class="voto__terminos txtw">Envia el formulario con tus datos dando click en el boton de enviar, y participa por la rifa de la consola que eligas</P>
  </div>

  <div class="testimonios">
    <div class="testimonios__container">
      <?php
        include("components/testimonioCard.php");
        include("components/testimonioCard.php");
        include("components/testimonioCard.php");
        include("components/testimonioCard.php");
        include("components/testimonioCard.php");
        include("components/testimonioCard.php");
        include("components/testimonioCard.php");
      ?>
    </div>
  </div>
  
<?php
  include("components/footer.php");
?>