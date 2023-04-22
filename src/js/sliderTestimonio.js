const slider = document.querySelector('.testimonios__container');
slider.style.transition = "all 1s ease-in-out";

function slides(){
  let contador = 0;

  let testimonioCards = document.querySelectorAll(".tarjeta__cover");
  let width = testimonioCards[0].clientWidth;
  let ancho = width;

  window.addEventListener("resize", function () {
    let width = testimonioCards[0].clientWidth;
  });

  setInterval(() => {
    slider.style.transform = `translateX(-${width}px)`;
    width+= ancho;
    contador++;

    if (contador === testimonioCards.length) {
      slider.style.transition = "all 0";
      setTimeout(function () {
        slider.style.transform = "translateX(0)";
        contador = 0;
        width = testimonioCards[0].clientWidth;
      }, 0);
    }
  }, 2000);

};

slides();