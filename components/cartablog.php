
<?php 

  function cartaBlog($image,$texto1,$texto2){
    $tarjeta = '<div class="carta-blog" style="background-image: url(\''  .(isset($ruta_base) ? $ruta_base : '').  'src/img/'.$image.'\');">';
    $tarjeta .= '<h4 class="carta-blog__h4 txtw">'.$texto1.'</h4>';
    $tarjeta .= '<h3 class="carta-blog__h3 txtw">'.$texto2.'</h3>';
    $tarjeta .= '</div>';
    return $tarjeta;
  };
?>