
function seleccionado(selected) {
  let divs = document.querySelectorAll(".votos__container-img");
  for (let i = 0; i < divs.length; i++) {
    if (divs[i].getAttribute("data-voto") === selected) {
      divs[i].classList.add("votado");
    } else {
      divs[i].classList.remove("votado");
    }
  }
}
