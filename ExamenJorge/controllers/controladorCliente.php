<?php

require_once('./models/database.php');
require_once('./models/listadoClientes.php');
require_once('./views/viewClientes.php');

class controladorCliente{

    //Instanciamos los objetos function y view y los metemos en el constructor
    public $listadoClientes;

    public $view;

    public $array = [];

    //Constructor del controlador

    public function __construct($listadoClientes, $view){
        $this->listadoClientes = $listadoClientes;
        $this->view = $view;
    }

    //Funcion que muestra los clientes

    public function mostrarClientes($view, $listadoClientes){
        $array = $listadoClientes->mostrarClientes();
        $view->mostrarClientes($array);
    }

    //Funcion que muestra los clientes por id

    public function mostrarClientesId($view, $listadoClientes, $id){
        $array = $listadoClientes->mostrarClientesId($id);
        $view->mostrarClienteId($array);
    }
}
?>