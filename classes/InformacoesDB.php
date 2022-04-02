<?php
require 'Banco.php';

class InformacoesDB
{
    private $id;
    private $imc;
    private $resultado;

    public function getResultado()
    {
        return $this->resultado;
    }

    public function setResultado($resultado): void
    {
        $this->resultado = $resultado;
    }

    public function getImc()
    {
        return $this->imc;
    }

    public function setImc($imc): void
    {
        $this->imc = $imc;
    }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getById(){
        $infodb = new \Banco\InfoDB();
        $infodb = $infodb->getPdo();

        $stmt = $infodb->prepare('SELECT imc FROM tbinformacoes');


        $stmt->execute();
        while($linha = $stmt->fetch(PDO::FETCH_ASSOC) >= $this->getImc()){

        }
    
    }
 }

