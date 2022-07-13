<?php 
include("../admin/db/conexion.php");

//GUARDAR DIRECTIVO
if (isset($_POST['guardar_directivo'])) {
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $dni = $_POST['dni'];
    $fecha_nacimiento = $_POST['fecha-nacimiento'];
    $cargo = $_POST['cargo'];
    $correo = $_POST['correo'];
    $celular = $_POST['celular'];
    $anio = $_POST['anio'];
    $foto = $_FILES['foto']['name'];
    
    $fecha = new DateTime();
    $nombreArchivo = ($foto!="")?$fecha->getTimestamp()."_".$foto: "imagenDefault.jpg";

    $tmpFoto = $_FILES['foto']['tmp_name'];

    if ($tmpFoto!="") {
        move_uploaded_file($tmpFoto,"../../img/directivos/".$nombreArchivo);
    }

    $query = "INSERT INTO directivos (idDirectivo, nombres, apellidos, dni, fechaNacimiento, idCargo, correo, celular, foto, idAnio) 
    VALUES (NULL, '$nombres', '$apellidos', '$dni', '$fecha_nacimiento', $cargo, '$correo', $celular, '$nombreArchivo', $anio)";

    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed");
    }
    $_SESSION['message'] = 'Personal Guardado Correctamente';
    $_SESSION['message_type'] = 'success';

    header("Location: ../../admin.php");
} 


if (isset($_POST['guardar_anio'])) {
    $anio = $_POST['anio'];
    
    $query = "INSERT INTO aniolectivo (idAnio, nombre) 
    VALUES (NULL, '$anio')";

    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed");
    }
    $_SESSION['message'] = 'Año Lectivo Guardado Correctamente';
    $_SESSION['message_type'] = 'success';

    header("Location: ../../anio.php");
}

// GUARDAR CARGO
if (isset($_POST['guardar_cargo'])) {
    $cargo = $_POST['cargo'];
    
    $query = "INSERT INTO cargo (idCargo, nombre) 
    VALUES (NULL, '$cargo')";

    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Error de consulta a bd.");
    }
    $_SESSION['message'] = 'Cargo Guardado Correctamente';
    $_SESSION['message_type'] = 'success';

    header("Location: ../../cargo.php");
}