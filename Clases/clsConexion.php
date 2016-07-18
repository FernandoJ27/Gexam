<?php
function Conectar(){
    try{
       $link = mysqli_connect('localhost','root','','gexam'); //Casa
       //$link = mysqli_connect('localhost','root','upt','gexam'); //UPT
    }catch(Exception $ex){
        echo "Error en conexión";
    }
    return $link;
}