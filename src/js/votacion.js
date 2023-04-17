


function seleccionado (selected){
  let seleccion = document.querySelector(`#${selected}`);
  let check = document.querySelector(`.${selected}`);
  console.log(selected);
  if(check.checked){
    seleccion.classList.add('votado');
  }else {
    seleccion.classList.remove('votado');
  };
}
