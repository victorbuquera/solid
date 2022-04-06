<?php

include 'classes/addUser.php';
include 'classes/InformacoesDB.php';
if(isset($_POST["peso"]) && isset($_POST["altura"])) {

    $addUser = new addUser();
    $addUser->setNome($_POST['nome']);
    $addUser->setAltura($_POST['altura']);
    $addUser->setPeso($_POST['peso']);
    $addUser->setImc($_POST['imc']);
    $addUser->inserirUsuario();

    $infodb = new InformacoesDB();
    $resultado = $infodb->getAll();
    var_dump($resultado);

}