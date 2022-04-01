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
    url: "addUser.php",
    data: campos,
    contentType: false,
    processData: false,
    success: function(result){
        console.log(result);
    }
});
}
