<?php
include("../admin/db/conexion.php");

//ELIMINAR DIRECTIVO
if(isset($_REQUEST['idDirectivo'])){
    $id = $_REQUEST['idDirectivo'];

    // Codigo para eliminar foto
    $sqlImg = "SELECT foto FROM directivos WHERE idDirectivo = $id";
    $queryImg = mysqli_query($conn, $sqlImg);
    $resultImg = mysqli_fetch_array($queryImg);

    print_r($resultImg);

    if (isset($resultImg['foto'])) {
        if (file_exists("../../img/directivos/".$resultImg["foto"])) {
            unlink("../../img/directivos/".$resultImg["foto"]);
            echo "eliminardo";
        }
    }
    //Fin codigo para eliminar foto
    
    $sql = "DELETE FROM directivos WHERE idDirectivo = $id";

    $query = mysqli_query($conn, $sql);
    if(!$query){
        die('Query Failed');
    }

    $_SESSION['message'] = 'Personal Eliminado Correctamente';
    $_SESSION['message_type'] = 'warning';
    header("location: ../../admin.php");
}

//ELIMINAR AÑO LECTIVO
if (isset($_REQUEST['idAnio'])) {
    $anio = $_REQUEST['idAnio'];
    
    $sql = "DELETE FROM aniolectivo WHERE idAnio = $anio";

    $query = mysqli_query($conn, $sql);
    if(!$query){
        die('Query Failed');
    }

    $_SESSION['message'] = 'Año Lectivo Eliminado Correctamente';
    $_SESSION['message_type'] = 'warning';

    header("Location: ../../anio.php");
}

//ELIMINAR CARGO
if (isset($_REQUEST['idCargo'])) {
    $cargo = $_REQUEST['idCargo'];
    
    $sql = "DELETE FROM cargo WHERE idCargo = $cargo";

    $query = mysqli_query($conn, $sql);
    if(!$query){
        die('Query Failed');
    }

    $_SESSION['message'] = 'Cargo Eliminado Correctamente';
    $_SESSION['message_type'] = 'warning';

    header("Location: ../../anio.php");
}
