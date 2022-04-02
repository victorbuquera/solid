<?php

use Banco\InfoDB;

include 'Banco.php';

class addUser
{

 private $nome;
 private $altura;
 private $peso;
 private $imc;
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getAltura()
    {
        return $this->altura;
    }


    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    public function getImc()
    {
        return $this->imc;
    }

    public function setImc($imc)
    {
        $this->imc = $imc;
    }

    public function inserirUsuario(){
        $infodb = new InfoDB();
        $infodb = $infodb->getPdo();
        $sql = "INSERT INTO tbpessoa(nome, altura, peso, imc) VALUES(:nome,:altura,:peso,:imc)";
        $stmt = $infodb->prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':peso', $this->peso);
        $stmt->bindParam(':altura', $this->altura);
        $stmt->bindParam(':imc', $this->imc);
        $stmt->execute();

}
}