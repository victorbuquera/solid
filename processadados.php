<?php

require_once 'classes/CalculaIMC.php';
require_once 'classes/tbinformacoes.php';
require_once 'classes/addUser.php';
require_once 'classes/InformacoesDB.php';

header("Content-type: Application/json; charset = utf-8");


if(isset($_POST["peso"]) && isset($_POST["altura"])) {

    $infoIMC = new CalculaIMC();
    $infoIMC->setPeso($_POST['peso']);
    $infoIMC->setAltura($_POST['altura']);
    $infoIMC->Calculo();
    $seuIMC = $infoIMC->getResultado();


    $tbinfo = new tbinformacoes();
    $tbinfo->setImc($seuIMC);
    $informacoesImc = $tbinfo->getInfoByImc();

    $addUser = new addUser();
    $addUser->setNome($_POST['nome']);
    $addUser->setAltura($infoIMC->getAltura());
    $addUser->setPeso($infoIMC->getPeso());
    $addUser->setImc($seuIMC);
    $addUser->setTbInformacoes($informacoesImc['id']);
    $addUser->inserirUsuario();


    $resultado = array(
        'informacoesIMC'=>$informacoesImc,
        'seuIMC'=> $seuIMC,
    );

    echo json_encode($resultado);

}