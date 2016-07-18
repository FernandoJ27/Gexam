<?php
include '../clsConexion.php';
$link = Conectar();
if (isset($_GET['accion'])){
    switch ($_GET['accion']){
        case 'Nuevo':Nuevo($link,$_POST['nombre']);break;
        case 'Modificar':Modificar($link,$_POST['nombre'],$_GET['id']);break;
        case 'Eliminar':Eliminar($link,$_GET['id']);break;
    }
}

function Nuevo($link,$nombre){
    $sqlquery = "INSERT INTO curso(nombre_curso) VALUES ('$nombre')";
    mysqli_query($link,$sqlquery);
    mysqli_close($link);
    header("Location: ../../Presentacion/Curso/listar.php");
}

function Modificar($link,$nombre,$id){
    $sqlquery = "UPDATE curso SET nombre_curso='$nombre' WHERE id_curso = $id";
    mysqli_query($link,$sqlquery);
    mysqli_close($link);
    header("Location: ../../Presentacion/Curso/listar.php");
}

function Eliminar($link,$id){
    $sqlquery = "DELETE FROM curso WHERE id_curso = $id";
    mysqli_query($link,$sqlquery);
    mysqli_close($link);
    header("Location: ../../Presentacion/Curso/listar.php");
}
