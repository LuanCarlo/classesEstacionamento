<?php


class Carro extends Veiculo
{
    private $custoInicial = 0;
    private $custoAcumulativo = 0;

    public function setCustoInicial($valor)
    {
        $this->custoInicial = $valor;
    }
    public function setCustoAcumulativo($valor)
    {
        $this->custoAcumulativo = $valor;
    }
    public function getCustoInicial()
    {
        $this->custoInicial;
    }
    public function getCustoAcumulativo()
    {
        return $this->custoAcumulativo;
    }
    public function getCustoTotal()
    {
        $total = $this->custoInicial + ($this->custoAcumulativo * parent::calculaTempoTotal());
        return $total;
    }

}