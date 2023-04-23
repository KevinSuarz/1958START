<?php
  $ruta_base = '../';
  $current_page = 'nosotros';
  include("../components/head.php");
  include("../components/navbar.php");
?>
  <?php
    include("../components/somosCard.php");
  ?>
  

<div class="nosotros__blog">
  <?php 
    include("../components/cartablog.php");
    echo cartaBlog("cartaBlog1.jpeg","solo con","xbox");
    echo cartaBlog("cartaBlog2.jpg","esta bien","xbox");
    echo cartaBlog("si","solo con","xbox");
    echo cartaBlog("si","solo con","xbox");
  ?>
</div>


<?php include("../components/footer.php");?>