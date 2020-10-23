//Script con funcion para detectar palindromo
function isPalindromo(string){
  let reversedString = '';
  for(var i=string.length-1; i>=0; i--){
    reversedString += string[i];
  }
  if(string.toLowerCase() === reversedString.toLowerCase() ){
    return true;
  } else {
    return false;
  } 
}
let frase = window.prompt('Ingrese una frase:');
isPalindromo(frase) ? 
  alert('Es palindromo') : 
  alert('No es palindromo');
