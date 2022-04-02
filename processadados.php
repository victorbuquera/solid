<?php
include 'classes/addUser.php';
if(isset($_POST["peso"]) && isset($_POST["altura"])){

    $addUser = new addUser();
    $addUser->setNome($_POST['nome']);
    $addUser->setAltura($_POST['altura']);
    $addUser->setPeso($_POST['peso']);
    $addUser->setImc($_POST['imc']);
    echo $addUser->getImc();
}
