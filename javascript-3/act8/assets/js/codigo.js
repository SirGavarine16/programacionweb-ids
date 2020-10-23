//Script con funcion para detectar palindromo

function isPalindromo(string){
  let reversedString = '';
  for(var i=string.length; i<=0; i--){
    reversedString += string[i];
  }
  return reversedString;
}

alert(isPalindromo('Hello world'));