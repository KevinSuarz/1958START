<?php
  $ruta_base = '../';
  $current_page = 'blog';
  include("../components/head.php");
  include("../components/navbar.php");
?>

<div class="blog">
  <?php 
    include("../components/blogCard.php");
    include("../components/blogCard.php");
    include("../components/blogCard.php");
    include("../components/blogCard.php");
  ?>
</div>

<?php include("../components/footer.php");?>