
var nomes = new Array();
var mensagem = " ";
do{
    for(var l_i = 0; l_i<=2; l_i++){
        nomes[l_i] = prompt("Digite um nome: ");
    }

    if (confirm("deseja informar mais nomes?")) {
        continuar = true;
    } else {
        continuar = false;
    }
}while(continuar);

for (let l_i = 0; l_i < nomes.length; l_i++){
    if (l_i + 1 < nomes.length) {
        mensagem = mensagem + nomes[l_i] + ", ";
    } else {
        mensagem = mensagem + nomes[l_i];
    }
    
}

alert(mensagem.toUpperCase());
