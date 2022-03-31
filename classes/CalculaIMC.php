<?php
class CalculaIMC
{
    private $peso;
    private $altura;
    private $resultado;
    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function getResultado()
    {
        return $this->resultado;
    }

    public function setResultado($resultado)
    {
        $this->resultado = $resultado;
    }

    public function Calculo(){
        $this->resultado = $this->peso / ($this->altura * $this->altura);
    }
}

