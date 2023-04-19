
<?php
function btn($btnClass, $btnText, $btnRuta, $btnStyle ,$ruta_base, $textoColor) {
  $tarjeta = '<div class="'.$btnClass.'">';
  $tarjeta .= '<a href="'. $ruta_base . $btnRuta .'" class="btn-a '.$textoColor.'">'. $btnText ;
  $tarjeta .= '<svg class="btn-svg '.$btnStyle.' " viewBox="0 0 201 61" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0414 0V4.29759H3.91205V10.3176H0V50.5611H3.91205V56.4668H10.0098V60.772H190.065V56.4668H196.252V50.5558H200.635V9.53711H196.252V4.29759H192.385V0H10.0414Z" fill="#F3F3F3"/>
    </svg>';

  $tarjeta .= '</a>';
  $tarjeta .= '</div>';

  return $tarjeta;
}
?>

