<header class="header">
  <div class="navbar__mobile">
    
    <a href="<?php echo isset($ruta_base) ? $ruta_base . 'index.php' : '' ?>" class="header__logo">
      <img src="<?php echo isset($ruta_base) ? $ruta_base : '' ?>src/img/logo.png" alt="Logo 1958 START">
    </a>

    <button href="" id="burguer" class="burguerButton"><i class="fa-sharp fa-solid fa-bars txtw"></i></button>

    <nav class="navbar__desktop">
      <a href="<?php echo isset($ruta_base) ? $ruta_base : '' ?>index.php" class="txtw menu__link <?php echo ($current_page == 'inicio') ? 'menu__link--active' : '';?>">INICIO</a>
      <a href="<?php echo isset($ruta_base) ? $ruta_base : '' ?>pages/catalogo.php" class="txtw menu__link <?php echo ($current_page == 'catalogo') ? 'menu__link--active' : '';?>">CATÁLOGO</a>
      <a href="<?php echo isset($ruta_base) ? $ruta_base : '' ?>pages/nosotros.php" class="txtw menu__link <?php echo ($current_page == 'nosotros') ? 'menu__link--active' : '';?>">NOSOTROS</a>
      <a href="<?php echo isset($ruta_base) ? $ruta_base : '' ?>pages/blog.php" class="txtw menu__link <?php echo ($current_page == 'blog') ? 'menu__link--active' : '';?>">BLOG</a>
      <a href="<?php echo isset($ruta_base) ? $ruta_base : '' ?>pages/carrito.php" class="txtw menu__link <?php echo ($current_page == 'carrito') ? 'menu__link--active' : '';?>"><i class="fa-sharp fa-solid fa-bag-shopping"></i></a>
      <a href="" class="txtw menu__link"><i class="fa-solid fa-headset"></i></a>
    </nav>

  </div>
</header>

<nav class="menu__mobile">
  <a href="" class = "txtw menu__mobile-link">INICIO</a>
  <a href="" class = "txtw menu__mobile-link">CATÁLOGO</a>
  <a href="" class = "txtw menu__mobile-link">NOSOTROS</a>
  <a href="" class = "txtw menu__mobile-link">BLOG</a>
  <div>
    <a href=""><i class="fa-sharp fa-solid fa-bag-shopping txtw"></i></a>
    <a href=""><i class="fa-solid fa-headset txtw"></i></a>
  </div>
</nav>