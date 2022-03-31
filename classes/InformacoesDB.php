<?php
require 'Banco.php';

class InformacoesDB
{
    private $id;
    private $resultadoCalc;
    private $retornaCond;
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getResultadoCalc()
    {
        return $this->resultadoCalc;
    }

    public function setResultadoCalc($resultadoCalc)
    {
        $this->resultadoCalc = $resultadoCalc;
    }

    public function getRetornaCond()
    {
        return $this->retornaCond;
    }

    public function setRetornaCond($retornaCond)
    {
        $this->retornaCond = $retornaCond;
    }



    public function getById(){
        $infodb = new \Banco\InfoDB();
        $infodb = $infodb->getPdo();

        $stmt = $infodb->prepare('SELECT * FROM tbinformacoes');
        $stmt->execute();
        while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
            $this->retornaCond = $linha['id'];
            
        }
    
    }

}

