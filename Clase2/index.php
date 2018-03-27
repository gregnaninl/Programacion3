<?php
require_once "entidades/localidad.php";
require_once "entidades/persona.php";
require_once "entidades/direccion.php";
require "entidades/alumno.php";
require "entidades/profesor.php";



$localidadQ = new localidad( 1879,"Quilmes");
$direccion1= new direccion("esmeralda",40,$localidadQ);
$persona1= new persona("Calos","Perez",30955466,$direccion1);

//$persona1->Mostrarhtml();


$alumno = new alumno("Calos","Perez",30955466,$direccion1,24774,"2017-03-15" );
$alumno->Mostrarhtml();




?>