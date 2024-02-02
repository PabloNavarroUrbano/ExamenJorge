<?php
class listadoEmpleados{

//Funcion que mediante una query sql mostraremos todos los registros de empleados de la base de datos

public function mostrarEmpleados(){

    $modal = new Database();

    $conn = $modal->conexionBBDD();

    $sql = "SELECT EMP_NO, APELLIDOS, OFICIO FROM EMP";
    $result = $conn->query($sql);

    $resultado = [];

    if ($result) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $resultado[] = $row;
            }

            return $resultado;

        } else {
            echo "No se encontraron registros en la tabla 'tareas'.";
        }
    } else {
        echo "Error en la consulta: " . $conn->error;
    }

    $conn->close();
}

//Funcion que mediante una query sql mostraremos los registros de empleados por id

public function mostrarEmpleadosId($id){
    $modal = new Database();

    $conn = $modal->conexionBBDD();

    $sql = "SELECT * FROM EMP WHERE EMP_NO = $id";
    $result = $conn->query($sql);

    $resultado = [];

    if ($result) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $resultado[] = $row;
            }

            return $resultado;

        } else {
            echo "No se encontraron registros en la tabla 'tareas'.";
        }
    } else {
        echo "Error en la consulta: " . $conn->error;
    }

    $conn->close();
}
}
?>