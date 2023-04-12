<header>
    <?php
        if (isset($ruta_base)) {
            echo 
            '<a href="">
                <img src="'. $ruta_base .'src/img/logo.png" alt="Logo 1958 START">
            </a>';
        } else {
            echo 
            '<a href="">
                <img src="src/img/logo.png" alt="Logo 1958 START">
            </a>';
        }
    ?>
    <nav>
        <a href="">INICIO</a>
        <a href="">CATÁLOGO</a>
        <a href="">NOSOTROS</a>
        <a href="">BLOG</a>
        <a href=""><i class="fa-sharp fa-solid fa-bag-shopping"></i></a>
        <a href=""><i class="fa-solid fa-headset"></i></a>
    </nav>
</header>