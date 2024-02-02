<?php
class viewEmpleados{

    //Funcion que te muestra todos los empleados y que te permite mostrar al pulsar sobre el apellido informacion especifica
    public function mostrarEmpleados($array)
    {
        echo '<table border="1">';
        echo '<tr>';
        echo '<th>Apellido</th>';
        echo '<th>Oficio</th>';
        echo '</tr>';

        foreach ($array as $valor) {
            $apellido = $valor["APELLIDOS"];
            $oficio = $valor["OFICIO"];
            $id = $valor['EMP_NO'];

            echo '<tr>';
            echo '<td><a href="?page=employeesdetail&id=' . $id . '">' . $apellido . '</a></td>';
            echo '<td>' . $oficio . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    }

    //Funcion que me muestra los empleados 

    public function mostrarEmpleadosId($array)
    {
        echo '<table border="1">';
        echo '<tr>';
        echo '<th>Codigo Empleado</th>';
        echo '<th>Apellido</th>';
        echo '<th>Oficio</th>';
        echo '<th>Fecha de Alta</th>';
        echo '<th>Salario</th>';
        echo '<th>Comision</th>';
        echo '</tr>';

        foreach ($array as $valor) {
            $codigo = $valor["EMP_NO"];
            $apellidos = $valor["APELLIDOS"];
            $oficio = $valor["OFICIO"];
            $fecha = $valor['FECHA_ALTA'];
            $salario = $valor['SALARIO'];
            $observacion = $valor['COMISION'];

            echo '<tr>';
            echo '<td>' . $codigo . '</td>';
            echo '<td>' . $apellidos . '</td>';
            echo '<td>' . $oficio . '</td>';
            echo '<td>' . $fecha . '</td>';
            echo '<td>' . $salario . '</td>';
            echo '<td>' . $observacion . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    }

}
?>