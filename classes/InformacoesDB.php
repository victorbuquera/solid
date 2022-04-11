<?php
require_once 'Banco.php';

class InformacoesDB
{
    private $id;
    private $imc;
    private $resultado;

    public function getResultado()
    {
        return $this->resultado;
    }

    public function setResultado($resultado)
    {
        $this->resultado = $resultado;
    }

    public function getImc()
    {
        return $this->imc;
    }

    public function setImc($imc)
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

    public function getAll(){
        $infodb = new InfoDB();
        $infodb = $infodb->getPdo();
        $sql = "SELECT * FROM dbsolid.tbinformacoes, dbsolid.tbpessoa";
        $stmt = $infodb->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
 }

