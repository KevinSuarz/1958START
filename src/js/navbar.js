let burguerButton = document.getElementById("burguer");

let menuDesp = document.getElementsByClassName("menu__mobile")[0];

burguerButton.addEventListener("click", ()=>{
  menuDesp.classList.toggle("showMenu");
});