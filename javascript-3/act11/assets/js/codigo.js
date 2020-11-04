//Script con funcion 
function checkString(string){
  let upperCaseSum = 0;
  let lowerCaseSum = 0;
  for(var i = 0; i<string.length; i++){
    if(string[i] === string[i].toUpperCase()) upperCaseSum++;
    if(string[i] === string[i].toLowerCase()) lowerCaseSum++;
  }
  if(upperCaseSum === string.length){
    alert('La cadena esta conformada por sólo mayúsculas.')
  } else if (lowerCaseSum === string.length) {
    alert('La cadena esta conformada por sólo minúsculas.')
  } else {
    alert('La cadena es una mezcla de mayúsculas y minúsculas.')
  }
}
checkString(window.prompt('Ingrese una cadena: '));
