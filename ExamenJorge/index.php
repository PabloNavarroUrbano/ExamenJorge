<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('./models/listadoClientes.php');
require_once('./controllers/controladorCliente.php');
require_once('./views/viewClientes.php');
require_once('./models/listadoEmpleados.php');
require_once('./controllers/controladorEmpleado.php');
require_once('./views/viewEmpleados.php');


//Enroutamiento que queremos para la pagina

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

//Saca la id de una url para ciertos momentos en la que lo necesitamos

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

//El enroutamiento segun los casos

switch ($page) {
    case '':
        echo '<a href="?page=clients">Clientes</a>';
        echo '<br>';
        echo '<a href="?page=employees">Empleados</a>';
        break;
    case 'clients':
        $db = new Database();
        $model = new listadoClientes();
        $view = new viewClientes();
        $controlador = new controladorCliente($model, $view);
        $array = $model->mostrarClientes();
        $controlador->mostrarClientes($view, $model);
        break;
    case 'employees':
        $db = new Database();
        $model = new listadoEmpleados();
        $view = new viewEmpleados();
        $controlador = new controladorEmpleado($model, $view);
        $array = $model->mostrarEmpleados();
        $controlador->mostrarEmpleados($view, $model);
        break;
    case 'employeesdetail':
        $db = new Database();
        $model = new listadoEmpleados();
        $view = new viewEmpleados();
        $controlador = new controladorEmpleado($model, $view);
        $array = $model->mostrarEmpleadosId($id);
        $controlador->mostrarEmpleadosId($view, $model, $id);
        echo '<a href="?page=employees">Listado de Empleados</a>';
        break;
    case 'clientsdetail':
        $db = new Database();
        $model = new listadoClientes();
        $view = new viewClientes();
        $controlador = new controladorCliente($model, $view);
        $array = $model->mostrarClientesId($id);
        $controlador->mostrarClientesId($view, $model, $id);
        echo '<a href="?page=clients">Listado de Clientes</a>';
        break;
    default:
        echo "Página no encontrada";
        break;
}
