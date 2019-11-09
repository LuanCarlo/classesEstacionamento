<?php


class Vaga
{

    private $id;
    private $localizacao;
    private $status;
    private $dataReserva;

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setLocalizacao($localizacao)
    {
        $this->localizacao = $localizacao;
    }
    public function getLocalizacao()
    {
        return $this->localizacao;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function reservarVaga()
    {
        $this->dataReserva = new \DateTime();
    }
}