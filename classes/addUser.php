<?php
require_once 'Banco.php';

class addUser
{
 private $nome;
 private $altura;
 private $peso;
 private $imc;
 private $id_tbinformacoes;

    public function getTbInformacoes()
    {
        return $this->id_tbinformacoes;
    }

    public function setTbInformacoes($tb_informacoes): void
    {
        $this->id_tbinformacoes = $tb_informacoes;
    }

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
        $sql = "INSERT INTO dbsolid.tbpessoa(nome, altura, peso, imc, id_tbinformacoes) VALUES(:nome,:altura,:peso,:imc, :id_tbinformacoes)";
        $stmt = $infodb->prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':peso', $this->peso);
        $stmt->bindParam(':altura', $this->altura);
        $stmt->bindParam(':imc', $this->imc);
        $stmt->bindParam(':id_tbinformacoes', $this->id_tbinformacoes, PDO::PARAM_INT);
        $stmt->execute();

}
}