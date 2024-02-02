<?php
class viewClientes{

    //Funcion que me muestra clientes y si clickas en el nombre te permite ver info especifica de cada uno

    public function mostrarClientes($array)
    {
        echo '<table border="1">';
        echo '<tr>';
        echo '<th>Nombre</th>';
        echo '<th>Ciudad</th>';
        echo '</tr>';

        foreach ($array as $valor) {
            $id = $valor['CLIENTE_COD'];
            $nombre = $valor["NOMBRE"];
            $ciudad = $valor["CIUDAD"];

            echo '<tr>';
            echo '<td><a href="?page=clientsdetail&id=' . $id . '">' . $nombre . '</td>';
            echo '<td>' . $ciudad . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    }

    //Funcion que te muestra informacion de un cliente por id

    public function mostrarClienteId($array)
    {
        echo '<table border="1">';
        echo '<tr>';
        echo '<th>Codigo Cliente</th>';
        echo '<th>Nombre</th>';
        echo '<th>Direccion</th>';
        echo '<th>Telefono</th>';
        echo '<th>Limite Credito</th>';
        echo '<th>Observaciones</th>';
        echo '</tr>';

        foreach ($array as $valor) {
            $codigo = $valor["CLIENTE_COD"];
            $nombre = $valor["NOMBRE"];
            $direccion = $valor["DIREC"];
            $telefono = $valor['TELEFONO'];
            $limite = $valor['LIMITE_CREDITO'];
            $observacion = $valor['OBSERVACIONES'];

            echo '<tr>';
            echo '<td>' . $codigo . '</td>';
            echo '<td>' . $nombre . '</td>';
            echo '<td>' . $direccion . '</td>';
            echo '<td>' . $telefono . '</td>';
            echo '<td>' . $limite . '</td>';
            echo '<td>' . $observacion . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    }

}
?>