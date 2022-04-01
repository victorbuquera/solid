function SendData(){

var campos = new FormData();
let nome = document.getElementById("nome").value;
let peso = document.getElementById("peso").value;
let altura = document.getElementById("altura").value;
let calc = peso / (altura*altura).toFixed(2);
let calc2 = calc.toFixed(2);
let imc = calc2.toString();
campos.append("nome",nome);
campos.append("peso", peso);
campos.append("altura", altura);
campos.append("imc",imc);

$.ajax({
    type: "POST",
    url: "processadados.php",
    data: campos,
    contentType: false,
    processData: false,
    success: function(result){
        console.log(result)
    }
});
}
