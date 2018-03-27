<?php
include_once "persona.php";
include_once "iMostrable.php";


class profesor extends persona //implements iMostrable
{

    private $materias;
    private $dias;

    public function __construct( $nombre,$apellido,$dni,$dir,$mat,$dia)
    {
        parent::__construct($nombre,$apellido,$dni,$dir);
        $this->materias=$mat;
        $this->dias=$dia;
    }

    public function getmaterias()
    {
        return $this->materias;
    }
    public function setmaterias($mat)
    {
        $this->materias[] = $mat;
    }

    public function getdias()
    {
        return $this->dias;
    }
    public function setdias($dia)
    {
        $this->dias[] = $dia;
    }





}



?>