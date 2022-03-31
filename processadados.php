<?php
include 'classes/CalculaIMC.php';
include 'classes/InformacoesDB.php';

if(isset($_POST["peso"]) && isset($_POST["altura"])){

    $CalculaIMC = new CalculaIMC();
    $CalculaIMC->setAltura($_POST["altura"]);
    $CalculaIMC->setPeso($_POST["peso"]);
    $CalculaIMC->Calculo();

    //Verificando condicao
    $VerificaCond = new InformacoesDB();
    $VerificaCond->setResultadoCalc($CalculaIMC->getResultado());
    $VerificaCond->getById();
    var_dump($VerificaCond->getRetornaCond());
}
