var lado1;
var lado2;
var lado3;

lado1 = prompt ("digite o tamanho em centímetro do primeiro lado do triângulo:");
lado2 = prompt ("digite o tamanho em centímetro do segundo lado do triângulo:");
lado3 = prompt ("digite o tamanho em centímetro do terceiro lado do triângulo:");

if(ValidaTriangulo(lado1,lado2,lado3)){

    switch(DefineTipoTriangulo(lado1,lado2,lado3)) {
        case "equilatero":
            console.log("Triângulo Equilátero");
            break;
        case "isosceles":
            console.log("Triângulo Isósceles");
            break;
        case "escaleno":
            console.log("Triângulo Escaleno");
            break;
        default:
            console.log("Indefinido");
    }
}else{
    alert("valores inválidos para um trinagulo");
}


function DefineTipoTriangulo(lado1, lado2, lado3){

    if(lado1 == lado2 && lado1 == lado3 && lado2 == lado3){
        return "equilatero";
    }

    if((lado1 == lado2 && lado1 != lado3) ||( lado2 == lado3 && lado2 != lado1) || ( lado1 == lado3 && lado1 != lado2)){
        return "isosceles";
    }

    if(lado1 != lado2 && lado1 != lado3 && lado2 != lado3){
        return "escaleno";
    }
}

function ValidaTriangulo(lado1, lado2, lado3){

    if((parseInt(lado1)+parseInt(lado2)) > parseInt(lado3)){
        return true;
    }else{
        return false;
    }
}