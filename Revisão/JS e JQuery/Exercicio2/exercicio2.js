var continuar = false;

do{
    var numero = prompt("digite um número:");

    if (NumeroEParImpar(numero)) {
        alert("número é par");    
    } else {
        alert("número é ímpar");
    }

    if (confirm("deseja informar outro número?")) {
        continuar = true;
    } else {
        continuar = false;
    }
}while(continuar)

// TRUE = Par
// FALSE = Impar
function NumeroEParImpar(numero){
    if (numero%2 ==0 ) {
        return true;
    } else {
        return false;
    }
}