<?php

require_once('./models/database.php');
require_once('./models/listadoEmpleados.php');
require_once('./views/viewEmpleados.php');

class controladorEmpleado{

    //Instanciamos los objetos function y view y los metemos en el constructor
    public $listadoEmpleados;

    public $view;

    public $array = [];

    //Constructor de el controladorEmpleado

    public function __construct($listadoEmpleados, $view){
        $this->listadoEmpleados = $listadoEmpleados;
        $this->view = $view;
    }

    //Muestra todos los empleados

    public function mostrarEmpleados($view, $listadoEmpleados){
        $array = $listadoEmpleados->mostrarEmpleados();
        $view->mostrarEmpleados($array);
    }

    //Muestra los empleados a partir de una id
    
    public function mostrarEmpleadosId($view, $listadoEmpleados, $id){
        $array = $listadoEmpleados->mostrarEmpleadosId($id);
        $view->mostrarEmpleadosId($array);
    }
}
?>