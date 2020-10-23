var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 
  'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 
    'K', 'E', 'T'];

var dni = window.prompt('Ingrese su DNI:', 0);
var letra_dni = window.prompt('Ingrese su letra:', 'A');
if(parseInt(dni) < 0 || parseInt(dni) > 99999999) {
  alert('El número proporcionado no es válido.');
}else {
  var letra_calculada = letras[parseInt(dni) % 23] ;
  letra_calculada === letra_dni ? alert('El número y la letra son correctos.'):alert('La letra indicada no es correcta.')
}