
<?php
function catalogo__card($anio, $producto, $imagen, $precio, $ruta_base) {
  $tarjeta = '<div class="catalogo__producto">';
  $tarjeta .= '<div class="producto__marco">';
  $tarjeta .= '<h4 class="producto__anio txtgray">'.$anio.'</h4>';
  // $tarjeta .= '<img src="../src/img/consolas/super-nintendo.png" alt="consola super nintendo" class="producto__imagen">';
  $tarjeta .= '<img src="'  .(isset($ruta_base) ? $ruta_base : '').  'src/img/consolas/'  .$imagen.  '" alt="consola super nintendo" class="producto__imagen">';
  $tarjeta .= '<a href="" class="producto__carrito"><i class="fa-solid fa-cart-plus txtgray car__add"></i></a></div>';
  $tarjeta .= '<div class="product__details">';
  $tarjeta .= '<h6 class="product__name txtw">'.$producto.'</h6>';
  $tarjeta .= '<h4 class="product__price txtr">€'.$precio.'</h4></div>';
  $tarjeta .= '</div>';
  return $tarjeta;
}
?>

<!-- <div class="catalogo__producto">
  <div class="producto__marco">
    <h4 class="producto__anio txtgray">1990</h4>

    <img 
      src="
        <?php echo isset($ruta_base) ? $ruta_base : ''?>
        src/img/consolas/super-nintendo.png" 
      alt="consola super nintendo" 
      class="producto__imagen">

    <a href="" class="producto__carrito">
      <i class="fa-solid fa-cart-plus txtgray car__add"></i>
    </a>
  </div>
  <div class="product__details">
    <h6 class="product__name txtw">Super Nintendo</h6>
    <h4 class="product__price txtr">€85,00</h4>
  </div>
</div> -->