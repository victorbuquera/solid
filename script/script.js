function SendData(){

var campos = new FormData();
let peso = document.getElementById("peso").value;
let altura = document.getElementById("altura").value;
campos.append("peso", peso);
campos.append("altura", altura);
$.ajax({
    type: "POST",
    url: "processadados.php",
    data: campos,
    contentType: false,
    processData: false,
    success: function(result){
        console.log(result);
    }
});
}
