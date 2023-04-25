<?php
  $ruta_base = '../';
  $current_page = 'nosotros';
  include("../components/head.php");
  include("../components/navbar.php");
  include("../components/somosCard.php");
?>

<div class="nosotros__blog">
  <?php 
    include("../components/cartablog.php");
    echo cartaBlog("cartaBlog1.jpeg","solo con","xbox",$ruta_base);
    echo cartaBlog("cartaBlog2.jpg","esta bien","xbox",$ruta_base);
    echo cartaBlog("si","solo con","xbox",$ruta_base);
    echo cartaBlog("si","solo con","xbox",$ruta_base);
  ?>
</div>


<?php include("../components/footer.php");?>