//Script para calcular factorial
var num = window.prompt('Ingrese un número:');
if(isNaN(num) || num < 0){
  alert('El número es inválido.');
} else {
  var factorial = 1;
  for(var i=0; i<num; i++ ){
    factorial*=i+1;
  }
  alert('El factorial es '+factorial);
}