<?php
include '../clsConexion.php';
$link = Conectar();
if (isset($_GET['accion'])){
    switch ($_GET['accion']){
        case 'Nuevo':Nuevo($link,$_POST['pregunta'],$_GET['idexamen'],$_GET['titulo']);break;
        case 'Modificar':Modificar($link,$_POST['pregunta'],$_GET['idpregunta'],$_GET['titulo']);break;
        case 'Eliminar':Eliminar($link,$_GET['id'],$_GET['titulo']);break;
    }
}

function Nuevo($link,$pregunta,$idexamen,$tituloexamen){
    $fecha=date("Y-m-d h:i:sa");
    $sqlquery = "INSERT INTO pregunta(id_examen,pregunta,fecha_creacion) VALUES ($idexamen,'$pregunta','$fecha')";
    mysqli_query($link,$sqlquery);
    mysqli_close($link);
    header("Location: ../../Presentacion/Examen/preguntasplantilla.php?id=$idexamen&examen=$tituloexamen");
}

function Modificar($link,$pregunta,$idpregunta,$tituloexamen){
    $sqlquery = "UPDATE curso SET nombre_curso='$nombre' WHERE id_curso = $id";
    mysqli_query($link,$sqlquery);
    mysqli_close($link);
    header("Location: ../../Presentacion/Examen/preguntasplantilla.php");
}

function Eliminar($link,$idpregunta,$tituloexamen){
    $sqlquery = "DELETE FROM curso WHERE id_curso = $id";
    mysqli_query($link,$sqlquery);
    mysqli_close($link);
    header("Location: ../../Presentacion/Examen/preguntasplantilla.php");
}
