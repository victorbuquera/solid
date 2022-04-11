<?php
require_once 'Banco.php';

class bancoIMC{
    private $id;
    private $nome;
    private $imc;

    public function getId()
    {
        return $this->id;
    }


    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function getImc()
    {
        return $this->imc;
    }

    public function setImc($imc): void
    {
        $this->imc = $imc;
    }

    public function insereUsuarioIMC (){
        $infodb = new InfoDB();
        $infodb = $infodb->getPdo();
        $sql = "INSERT INTO dbsolid.usuarioimc(id,nome, imc) VALUES(:id,:nome,:imc)";
        $stmt = $infodb->prepare($sql);
        $stmt->bindParam(':id',$this->id);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':imc',$this->imc);
        $stmt->execute();
    }

}