<?php
include 'classes/CalculaIMC.php';
include 'classes/InformacoesDB.php';

if(isset($_POST["peso"]) && isset($_POST["altura"])){

    $CalculaIMC = new CalculaIMC();
    $CalculaIMC->setAltura($_POST["altura"]);
    $CalculaIMC->setPeso($_POST["peso"]);
    $CalculaIMC->Calculo();
    $CalculaIMC->getResultado();
    echo $CalculaIMC->getResultado();


}
