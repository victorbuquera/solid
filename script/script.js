function SendData(){

var campos = new FormData();
let nome = document.getElementById("nome").value;
let peso = document.getElementById("peso").value;
let altura = document.getElementById("altura").value;

campos.append("nome",nome);
campos.append("peso", peso);
campos.append("altura", altura);

$.ajax({
    type: "POST",
    url: "processadados.php",
    data: campos,
    contentType: false,
    processData: false,
    success: function(result){
        const tr = document.getElementById('tr')
        tr.innerHTML =
            `<td>${result.informacoesIMC.classificacao}</td>
            <td>${result.seuIMC}</td>
            <td>${result.informacoesIMC.consequencia}</td>`;
    }
});
}
