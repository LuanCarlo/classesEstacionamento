<?php


class Veiculo
{
    private $id;
    private $cliente;
    private $placa;
    private $modelo;
    private $cor;
    private $dataEntrada;

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }
    public function getCliente()
    {
        return $this->cliente;
    }
    public function getPlaca()
    {
        return $this->placa;
    }
    public function setPlaca($placa)
    {
        $this->placa = $placa;
    }
    public function setDataEntrada()
    {
        $this->dataEntrada =  new \DateTime();
    }
    public function calculaTempoTotal()
    {
        return $this->dataEntrada->diff(new \DateTime());
    }
}