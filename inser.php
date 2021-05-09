<?php

    $link = mysqli_connect("localhost","root","");
    if($link){
        mysqli_select_db($link,"equipos");
        mysqli_query($link,"SET NAMES 'utf8'");
    }

    $idEquipos=$_POST['id_equipo'];
    $equipo=$_POST['equipo'];
    $tipoEquipo=$_POST['tipo_equipo'];

    $ficha22="INSERT INTO batch_record SET id_equipo='$idEquipos', equipo='$equipo', tipo_equipo='$tipoEquipo'";
    $eje_inser_ficha2k2=mysqli_query($link, $ficha22);

?>