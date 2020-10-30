//Script con funcion 
function isPair(number){
  if(isNaN(number)){
    alert('El número especificado no es válido.')
  } else {
    if( parseInt(number) % 2 === 0 ){
      return 'Es par.' 
    } else {
      return 'Es impar.'
    }
  }
}
let n = window.prompt('Ingrese una número:');
alert(isPair(n))
