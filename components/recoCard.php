

<?php
  include("button.php");
  
  function recoCard($ruta_base){
    $but = btn("recoCard__comprar-btn", "COMPRAR", "ir a carrito", "btn__black", $ruta_base, "txtr");

    $tarjeta = '<div class="recoCard">';
    $tarjeta .= '<div class="recoCard__img">';
    $tarjeta .= '<img src="' .(isset($ruta_base) ? $ruta_base : '').'src/img/recocard1.png" alt="mala esa">';
    $tarjeta .= '</div>';
    $tarjeta .= '<div class="recoCard__info">';
    $tarjeta .= '<h4 class="recoCard__title txtgray">Gameboy Advance SP</h4>';
    $tarjeta .= '<p class="recoCard__descripcion">Con su gran selección de juegos y tamaño portátil, ¡es la elección perfecta para los amantes de los videojuegos retro! Consigue la tuya ahora</p>';
    $tarjeta .= '<div class="recoCard__comprar">';
    $tarjeta .= $but;
    $tarjeta .= '<h4 class="recoCard__precio txtr">€55,00</h4>';
    $tarjeta .= '</div>';
    $tarjeta .= '</div>';
    $tarjeta .= '</div>';
    return $tarjeta;
  };



      
          

?>