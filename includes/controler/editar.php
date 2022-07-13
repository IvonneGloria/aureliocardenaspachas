<?php
include("../admin/db/conexion.php");

//Actualizar Directivo
if (isset($_POST['actualizar_directivo'])) {
    $id = $_GET['id'];
    $nombresUdt = $_POST['nombresAct'];
    $apellidosUdt = $_POST['apellidosAct'];
    $dniUdt = $_POST['dniAct'];
    $fechaNacimientoUdt = $_POST['fecha-nacimientoAct'];
    $correoUdt = $_POST['correoAct'];
    $celularUdt = $_POST['celularAct'];
    $idCargoUdt = $_POST['cargoAct'];
    $idAnioUdt = $_POST['anioAct'];
    $foto = $_FILES['fotoAct']['name'];

    // Codigo para eliminar foto
    $sqlImg = "SELECT foto FROM directivos WHERE idDirectivo = $id";
    $queryImg = mysqli_query($conn, $sqlImg);
    $resultImg = mysqli_fetch_array($queryImg);

    $fecha = new DateTime();
    $nombreArchivo = ($foto != "") ? $fecha->getTimestamp() . "_" . $foto : "imagenDefault.jpg";

    $tmpFoto = $_FILES['fotoAct']['tmp_name'];

    if ($tmpFoto != "") {
        move_uploaded_file($tmpFoto, "../../img/directivos/" . $nombreArchivo);
    }

    if (isset($resultImg['foto'])) {
        if (file_exists("../../img/directivos/".$resultImg["foto"])) {
            unlink("../../img/directivos/".$resultImg["foto"]);
            echo "eliminardo";
        }
    }
    //Fin codigo para eliminar foto

    $sql = "UPDATE directivos SET nombres = '$nombresUdt', apellidos = '$apellidosUdt', 
        dni = '$dniUdt', fechaNacimiento = '$fechaNacimientoUdt', idCargo = $idCargoUdt, correo = '$correoUdt', 
        celular = '$celularUdt', foto = '$nombreArchivo', idAnio = $idAnioUdt WHERE idDirectivo = $id";

    mysqli_query($conn, $sql);

    $_SESSION['message'] = 'Personal Actualizado Correctamente';
    $_SESSION['message_type'] = 'success';
    header("Location: ../../admin.php");
}


    //Actualizar Año Lectivo
    if (isset($_POST['actualizar_anio'])) {
        $idAnio = $_GET['idAnio'];
        $nombreAnio = $_POST['anioAct'];
        
        $sql = "UPDATE aniolectivo SET nombre = '$nombreAnio' WHERE idAnio = $idAnio";
        mysqli_query($conn, $sql);

        $_SESSION['message'] = 'Año Lectivo Actualizado Correctamente';
        $_SESSION['message_type'] = 'success';
        header("Location: ../../anio.php");
    }
    //Actualizar Cargo
    if (isset($_POST['actualizar_cargo'])) {
        $idCargo = $_GET['idCargo'];
        $nombreAnio = $_POST['cargoAct'];
        
        $sql = "UPDATE cargo SET nombre = '$nombreAnio' WHERE idCargo = $idCargo";
        mysqli_query($conn, $sql);

        $_SESSION['message'] = 'Cargo Actualizado Correctamente';
        $_SESSION['message_type'] = 'success';
        header("Location: ../../cargo.php");
    }

    //Actualizar Directivo Actual
    if (isset($_GET['idActual'])) {
        $idDirectivo = $_GET['idActual'];
        $idCargoActual = $_GET['cargo'];

        $sql = "SELECT concat(nombres, ' ',apellidos) as fullname, cargo.nombre as cargo, 
        aniolectivo.nombre as anio FROM directivos 
        INNER JOIN cargo ON directivos.idCargo = cargo.idCargo 
        INNER JOIN aniolectivo ON directivos.idAnio = aniolectivo.idAnio  WHERE idDirectivo = $idDirectivo";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($query);
        
        $nombres = $row['fullname'];
        $cargo = $row['cargo'];
        $anio = $row['anio'];
        $idCargoActual;

        $sqlUdt = "UPDATE directivo_actual SET nom_apell = '$nombres', cargo = '$cargo', anioLec = '$anio' 
        WHERE idDirectivoActual = $idCargoActual";
        mysqli_query($conn, $sqlUdt);

        $_SESSION['message'] = 'Directivo Actual Asignado Correctamente';
        $_SESSION['message_type'] = 'success';
        header("Location: ../../asignar.php");
    }
?>
