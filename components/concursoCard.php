<?php
function votos__card($imagen, $voto, $ruta_base, $clase, $radioClass) {
  $tarjeta = '<div class="votos__card">';
  $tarjeta .= '<div class="votos__container-img '.$clase.'" id="'  .$voto.  '" data-voto="'  .$voto.  '"><img src="'  .(isset($ruta_base) ? $ruta_base : '').  'src/img/consolas/'  .$imagen.  '" alt="consola super nintendo" class="votos__img"></div>';
  $tarjeta .= '<input class="votos__check '.$radioClass.'" type="radio" name="voto" value="'  .$voto.  '" onClick ="seleccionado(\'' .$voto. '\')" >';
  $tarjeta .= '</div>';

  return $tarjeta;
}
?>