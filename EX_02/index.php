<?php

 class Empleado{
    public $nombre;
    public $sueldo;

    public function __construct($nombre, $sueldo)
    {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

}
    $empleado = new Empleado("Hugo", 1050);

         function pagarImpuestos($empleado){
             if ($empleado->sueldo < 2000){
                 echo "El empleado $empleado->nombre no ha de pagar impuestos";
        }else{
                 echo "El empleado $empleado->nombre ha de pagar impuestos";
             }
}
?>