<?php
include 'classes/CalculaIMC.php';

if(isset($_POST["peso"]) && isset($_POST["altura"])){

    $CalculaIMC = new CalculaIMC();
    $CalculaIMC->setAltura($_POST["altura"]);
    $CalculaIMC->setPeso($_POST["peso"]);
    $CalculaIMC->Calculo();

    //Verificando condicao
    $VerificaCond = new InformacoesDB();
    $VerificaCond->setResultadoCalc($CalculaIMC->getResultado());

}
