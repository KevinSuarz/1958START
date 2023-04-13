<header class="header">
    <div class="navbar__mobile">
      <div class="nav__mobile">
        <?php
        if (isset($ruta_base)) {
            echo 
            '<a href="" class="logo">
                <img src="'. $ruta_base .'src/img/logo.png" alt="Logo 1958 START">
            </a>';
        } else {
            echo 
            '<a href="" class="logo">
                <img src="src/img/logo.png" alt="Logo 1958 START">
            </a>';
        }
      ?>
      <button href="" id="burguer"><i class="fa-sharp fa-solid fa-bars txtw"></i></button>
      </div>
      <nav class="menu__mobile">
        <a href="" class = "txtw menu_link">INICIO</a>
        <a href="" class = "txtw menu_link">CATÁLOGO</a>
        <a href="" class = "txtw menu_link">NOSOTROS</a>
        <a href="" class = "txtw menu_link">BLOG</a>
        <div>
          <a href=""><i class="fa-sharp fa-solid fa-bag-shopping txtw"></i></a>
          <a href=""><i class="fa-solid fa-headset txtw"></i></a>
        </div>
      </nav>
    </div>
    <nav class="navbar__desktop">
      <?php
        if (isset($ruta_base)) {
            echo 
            '<a href="" class="logo">
                <img src="'. $ruta_base .'src/img/logo.png" alt="Logo 1958 START">
            </a>';
        } else {
            echo 
            '<a href="" class="logo">
                <img src="src/img/logo.png" alt="Logo 1958 START">
            </a>';
        }
      ?>
      <a href="">INICIO</a>
      <a href="">CATÁLOGO</a>
      <a href="">NOSOTROS</a>
      <a href="">BLOG</a>
      <a href=""><i class="fa-sharp fa-solid fa-bag-shopping"></i></a>
      <a href=""><i class="fa-solid fa-headset"></i></a>
    </nav>
</header>

