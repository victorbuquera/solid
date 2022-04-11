<?php
require_once 'Banco.php';
class tbinformacoes
{
    private $imc;
    public function getImc()
    {
        return $this->imc;
    }

    public function setImc($imc): void
    {
        $this->imc = $imc;
    }

    public function getInfoByImc(){
        $infodb = new InfoDB();
        $infodb = $infodb->getPdo();
        $sql = "SELECT * FROM dbsolid.tbinformacoes WHERE imc_min <= :imc AND imc_max >= :imc; ";
        $stmt = $infodb->prepare($sql);
        $stmt->bindParam(':imc', $this->imc);
        $stmt->execute();
        return $stmt->fetch();
    }
}