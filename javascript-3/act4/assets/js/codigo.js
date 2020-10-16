var valores = [true, 5, false, "hola", "adios", 2];
//Determinar el elemento de texto mayor
if(valores[3] > valores[4]){
    alert('El elemento de texto mayor es '+valores[3]);
} else {
    alert('El elemento de texto mayor es '+valores[4]);
}
//Con los bools para que de false y true
alert('Para que de true es '+(valores[0] || valores[2]));
alert('Para que de false es '+(valores[0] && valores[2]));
//Determinar el resultado de las 5 operaciones matematicas
alert('Suma: '+(valores[1]+valores[5]));
alert('Resta: '+(valores[1]-valores[5]));
alert('Multiplicacion: '+(valores[1]*valores[5]));
alert('Division: '+(valores[1]/valores[5]));
alert('Mod: '+(valores[1]%valores[5]));