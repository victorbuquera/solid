<?php
require 'Banco.php';

class InformacoesDB
{
 /*public function getById($id){
     $infodb = new \Banco\InfoDB();
     $infodb = $infodb->getPdo();

    $stmt = $infodb->prepare('SELECT * FROM tbinformacoes WHERE id = :id');
    $stmt->bindParam("id",$id);
    $stmt->execute();
    return $stmt->fetch();
 }
*/
    public function getById($id){
        $infodb = new \Banco\InfoDB();
        $infodb = $infodb->getPdo();

        $stmt = $infodb->prepare('SELECT * FROM tbinformacoes');
        $stmt->bindParam("id",$id);
        $stmt->execute();
        return $stmt->fetch();
    }
}

