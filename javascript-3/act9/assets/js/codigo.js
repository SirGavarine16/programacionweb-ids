//Script con funcion 
function isPair(number){
  if(isNaN(number)){
    alert('El número especificado no es válido.')
  } else {
    parseInt(number) % 2 === 0 ?
      alert('Es par.') :
      alert('Es impar.')
  }
}
let n = window.prompt('Ingrese una número:');
isPair(n)
