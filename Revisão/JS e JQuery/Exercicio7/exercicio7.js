var dia;
var mes;
var ano;

dia = prompt ("digite o dia que você nasceu:");
mes = prompt ("digite o mês que você nasceu:");
ano = prompt ("digite o ano que você nasceu:");

var data = new Date(ano,mes,dia);

alert(RetornaDiaSemana(data));

function RetornaDiaSemana(data){
    var semana = ["Sexta-Feira", "Sábado", "Domingo", "Segunda-Feira", "Terça-Feira", "Quarta-Feira", "Quinta-Feira"];

    return semana[data.getDay()]; //Função getDay não está retornando o valor correto, não encontrei o motivo.

}
