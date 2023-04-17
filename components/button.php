
<!-- <div class="btn-container">
  <a href="#" class="btn__red">
    MÁS
  </a>
</div> -->

<?php
function btn($btnClass, $btnText, $btnRuta, $btnStyle ,$ruta_base) {
  $tarjeta = '<div class="btn-container">';
  $tarjeta .= '<a href="#" class="btn__red">MÁS</a>';
  $tarjeta .= '</div>';

  return $tarjeta;
}
?>

