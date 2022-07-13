<?php include("includes/admin/db/conexion.php") ?>
<?php include("includes/admin/header.php") ?>
<?php include("includes/admin/left-navbar.php") ?>
<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->



<div class="content-page">
    <div class="content">
        <!-- Topbar Start -->
        <div class="navbar-custom">

            <button class="button-menu-mobile open-left">
                <i class="mdi mdi-menu"></i>
            </button>
            <h3 class="mt-3">Directivos</h3>

        </div>
        <!-- end Topbar -->

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row mt-2">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-2 mb-3 header-title font-16">Registrar Directivos</h4>
                            <div class="tab-content">
                                <?php
                                if (isset($_SESSION['message'])) { ?>
                                    <div class="col-md-5 alert alert-<?= $_SESSION['message_type'] ?>  alert-dismissible bg-<?= $_SESSION['message_type'] ?> text-white border-0 fade show" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        <?= $_SESSION['message'] ?>
                                    </div>
                                <?php
                                    session_unset();
                                }
                                ?>
                                <form action="includes/controler/guardar.php" method="POST" enctype="multipart/form-data" class="needs-validation row" novalidate>
                                    <div class="mb-2 col-md-3">
                                        <label class="form-label" for="validationCustom01">Nombres:</label>
                                        <input name="nombres" type="text" class="form-control" id="validationCustom01" placeholder="Tus nombres" required>
                                        <div class="invalid-feedback">
                                            Digite nombre válido.
                                        </div>
                                    </div>
                                    <div class="mb-2 col-md-3">
                                        <label class="form-label" for="validationCustom02">Apellidos:</label>
                                        <input name="apellidos" type="text" class="form-control" id="validationCustom02" placeholder="Tus apellidos" required>
                                        <div class="invalid-feedback">
                                            Digite tus apellidos.
                                        </div>
                                    </div>
                                    <div class="mb-2 col-md-3">
                                        <label class="form-label" for="validationCustom03">DNI:</label>
                                        <input name="dni" type="text" class="form-control" id="validationCustom03" placeholder="Tu DNI" required>
                                        <div class="invalid-feedback">
                                            Digite tu N° de DNI.
                                        </div>
                                    </div>
                                    <div class="mb-2 col-md-3">
                                        <label class="form-label" for="validationCustom04">Fecha de Nacimiento:</label>
                                        <input name="fecha-nacimiento" type="Date" class="form-control" id="validationCustom04" placeholder="Tu fecha de nacimiento" required>
                                        <div class="invalid-feedback">
                                            Ingresa tu fecha de nacimiento.
                                        </div>
                                    </div>

                                    <div class="mb-3 col-md-3">
                                        <label class="form-label" for="validationCustom05">Correo Electrónico</label>
                                        <input name="correo" type="email" class="form-control" id="validationCustom05" placeholder="Tu correo electrónico" required>
                                        <div class="invalid-feedback">
                                            Digite un correo electrónico válido.
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-3">
                                        <label class="form-label" for="validationCustom05">Celular:</label>
                                        <input name="celular" type="text" class="form-control" id="validationCustom05" placeholder="Tu N° celular" required>
                                        <div class="invalid-feedback">
                                            Digite un N° de celular válido.
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-3">
                                        <label class="form-label" for="validationCustom05">Cargo</label>
                                        <select name="cargo" class="form-select form-control" id="inputGroupSelect01" required>
                                            <option selected disabled>Elegir...</option>
                                            <?php
                                            $sql = 'SELECT * FROM cargo';
                                            $query = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($query)) {
                                                $idcargo = $row['idCargo'];
                                                $nombreCargo = $row['nombre'];
                                            ?>
                                                <option value="<?php echo $idcargo; ?>"><?php echo $nombreCargo ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            Seleccione un cargo.
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-3">
                                        <label class="form-label" for="validationCustom05">Año</label>
                                        <select name="anio" class="form-select form-control" id="inputGroupSelect01" required>
                                            <option selected disabled>Elegir...</option>
                                            <?php
                                            $sql = 'SELECT * FROM aniolectivo';
                                            $query = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($query)) {
                                                $idAnio = $row['idAnio'];
                                                $nombre = $row['nombre'];
                                            ?>
                                                <option value="<?php echo $idAnio; ?>"><?php echo $nombre ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            Elija un año.
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="validationCustom05">Foto: </label>
                                        <input name="foto" type="file" accept="image/*" class="form-control" id="" >
                                        <div class="">
                                            Suba una foto.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <button name="guardar_directivo" class="btn btn-primary col-md-2" type="submit">Registrar</button>
                                    </div>
                                </form>

                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-2 mb-3 header-title font-16">Lista de Directivos</h4>
                            <div class="tab-content">
                                <div class="tab-pane show active" id="scroll-horizontal-preview">
                                    <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Foto</th>
                                                <th scope="col">Nombres</th>
                                                <th scope="col">Apelllidos</th>
                                                <th scope="col">DNI</th>
                                                <th scope="col">Fecha de nacimiento</th>
                                                <th scope="col">correo</th>
                                                <th scope="col">Celular</th>
                                                <th scope="col">Cargo</th>
                                                <th scope="col">Año</th>
                                                <th scope="col">Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = 'SELECT idDirectivo, nombres, apellidos, dni, fechaNacimiento, correo, celular, foto,  
                                                cargo.nombre as cargo, aniolectivo.nombre as anio FROM directivos 
                                                INNER JOIN cargo ON directivos.idCargo = cargo.idCargo 
                                                INNER JOIN aniolectivo ON directivos.idAnio = aniolectivo.idAnio order by anio desc';
                                            $query = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($query)) {
                                                $idDirectivo = $row['idDirectivo'];
                                                $nombres = $row['nombres'];
                                                $apellidos = $row['apellidos'];
                                                $dni = $row['dni'];
                                                $fechaNacimiento = $row['fechaNacimiento'];
                                                $correo = $row['correo'];
                                                $celular = $row['celular'];
                                                $cargo = $row['cargo'];
                                                $anio = $row['anio'];
                                                $foto = $row['foto'];
                                            ?>
                                                <tr>
                                                    <td><img width="50px" src="img/directivos/<?php echo $foto; ?>" alt="foto directivo"></td>
                                                    <td><?php echo $nombres; ?></td>
                                                    <td><?php echo $apellidos; ?></td>
                                                    <td><?php echo $dni; ?></td>
                                                    <td><?php echo $fechaNacimiento; ?></td>
                                                    <td><?php echo $correo; ?></td>
                                                    <td><?php echo $celular; ?></td>
                                                    <td><?php echo $cargo; ?></td>
                                                    <td><span class="badge badge-outline-success p-1 font-14"><?php echo $anio; ?></span></td>
                                                    <td>
                                                        <!-- Modal editar-->
                                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editar_directivo_modal<?php echo $idDirectivo; ?>"><i class="fa-solid fa-pen-to-square"></i></button>
                                                        <div id="editar_directivo_modal<?php echo $idDirectivo; ?>" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="myLargeModalLabel">Actualizar Directivo</h4>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                                                    </div>
                                                                    <div class="modal-body mx-auto">

                                                                        <form action="includes/controler/editar.php?id=<?php echo $idDirectivo; ?>" method="POST" enctype="multipart/form-data" class="needs-validation row" novalidate action="#">
                                                                            <?php
                                                                            if (isset($idDirectivo)) {
                                                                                $idDirectivoAct = $idDirectivo;
                                                                                $sql = "SELECT * FROM directivos WHERE idDirectivo = $idDirectivoAct";
                                                                                $queryUdt = mysqli_query($conn, $sql);
                                                                                if (mysqli_num_rows($queryUdt) == 1) {
                                                                                    $row = mysqli_fetch_array($queryUdt);
                                                                                    $idDirectivoUdt = $row['idDirectivo'];
                                                                                    $nombresUdt = $row['nombres'];
                                                                                    $apellidosUdt = $row['apellidos'];
                                                                                    $dniUdt = $row['dni'];
                                                                                    $fechaNacimientoUdt = $row['fechaNacimiento'];
                                                                                    $correoUdt = $row['correo'];
                                                                                    $celularUdt = $row['celular'];
                                                                                    $idCargoUdt = $row['idCargo'];
                                                                                    $idAnioUdt = $row['idAnio'];
                                                                                }
                                                                            }
                                                                            ?>
                                                                            <div class="mb-2 col-md-4">
                                                                                <label class="form-label" for="validationCustom01">Nombres:</label>
                                                                                <input name="nombresAct" type="text" class="form-control" value="<?php echo $nombresUdt; ?>" id="validationCustom01" placeholder="Tus nombres" required>
                                                                                <div class="invalid-feedback">
                                                                                    Digite nombre válido.
                                                                                </div>
                                                                            </div>
                                                                            <div class="mb-2 col-md-4">
                                                                                <label class="form-label" for="validationCustom02">Apellidos:</label>
                                                                                <input name="apellidosAct" type="text" class="form-control" value="<?php echo $apellidosUdt; ?>" id="validationCustom02" placeholder="Tus apellidos" required>
                                                                                <div class="invalid-feedback">
                                                                                    Digite tus apellidos.
                                                                                </div>
                                                                            </div>
                                                                            <div class="mb-2 col-md-4">
                                                                                <label class="form-label" for="validationCustom03">DNI:</label>
                                                                                <input name="dniAct" type="text" class="form-control" value="<?php echo $dniUdt; ?>" id="validationCustom03" placeholder="Tu DNI" required>
                                                                                <div class="invalid-feedback">
                                                                                    Digite tu N° de DNI.
                                                                                </div>
                                                                            </div>
                                                                            <div class="mb-2 col-md-4">
                                                                                <label class="form-label" for="validationCustom04">Fecha de Nacimiento:</label>
                                                                                <input name="fecha-nacimientoAct" type="Date" class="form-control" value="<?php echo $fechaNacimientoUdt; ?>" id="validationCustom04" placeholder="Tu fecha de nacimiento" required>
                                                                                <div class="invalid-feedback">
                                                                                    Ingresa tu fecha de nacimiento.
                                                                                </div>
                                                                            </div>

                                                                            <div class="mb-2 col-md-4">
                                                                                <label class="form-label" for="validationCustom05">Correo Electrónico</label>
                                                                                <input name="correoAct" type="email" class="form-control" value="<?php echo $correoUdt; ?>" id="validationCustom05" placeholder="Tu correo electrónico" required>
                                                                                <div class="invalid-feedback">
                                                                                    Digite un correo electrónico válido.
                                                                                </div>
                                                                            </div>
                                                                            <div class="mb-2 col-md-4">
                                                                                <label class="form-label" for="validationCustom05">Celular:</label>
                                                                                <input name="celularAct" type="text" class="form-control" value="<?php echo $celularUdt; ?>" id="validationCustom05" placeholder="Tu N° celular" required>
                                                                                <div class="invalid-feedback">
                                                                                    Digite un N° de celular válido.
                                                                                </div>
                                                                            </div>
                                                                            <div class="mb-2 col-md-4">
                                                                                <label class="form-label" for="validationCustom05">Cargo</label>

                                                                                <select name="cargoAct" class="form-select form-control" id="inputGroupSelect01" required>
                                                                                    <option disabled>Elegir...</option>
                                                                                    <?php
                                                                                    $sqlAct = 'SELECT * FROM cargo';
                                                                                    $queryAct = mysqli_query($conn, $sqlAct);
                                                                                    while ($rowAct = mysqli_fetch_array($queryAct)) {
                                                                                        $idcargoAct = $rowAct['idCargo'];
                                                                                        $nombreCargoAct = $rowAct['nombre'];
                                                                                        if ($idcargoAct == $idCargoUdt) { ?>
                                                                                            <option selected value="<?php echo $idcargoAct; ?>"><?php echo $nombreCargoAct; ?></option>
                                                                                        <?php } else { ?>
                                                                                            <option value="<?php echo $idcargoAct; ?>"><?php echo $nombreCargoAct; ?></option>

                                                                                    <?php }
                                                                                    }
                                                                                    ?>
                                                                                </select>
                                                                                <div class="invalid-feedback">
                                                                                    Seleccione un cargo.
                                                                                </div>
                                                                            </div>
                                                                            <div class="mb-2 col-md-4">
                                                                                <label class="form-label" for="validationCustom05">Año</label>
                                                                                <select name="anioAct" class="form-select form-control" id="inputGroupSelect01" required>
                                                                                    <option disabled>Elegir...</option>
                                                                                    <?php
                                                                                    $sqlAct = 'SELECT * FROM aniolectivo';
                                                                                    $queryAct = mysqli_query($conn, $sqlAct);
                                                                                    while ($rowAct = mysqli_fetch_array($queryAct)) {
                                                                                        $idAnioAct = $rowAct['idAnio'];
                                                                                        $nombreAct = $rowAct['nombre'];
                                                                                        if ($idAnioAct == $idAnioUdt) { ?>
                                                                                            <option selected value="<?php echo $idAnioAct; ?>"><?php echo $nombreAct; ?></option>
                                                                                        <?php } else { ?>
                                                                                            <option value="<?php echo $idAnioAct; ?>"><?php echo $nombreAct; ?></option>

                                                                                    <?php }
                                                                                    }
                                                                                    ?>
                                                                                </select>
                                                                                <div class="invalid-feedback">
                                                                                    Elija un año.
                                                                                </div>
                                                                            </div>
                                                                            <div class="mb-3 col-md-8">
                                                                                <label class="form-label" for="">Foto: </label>
                                                                                <input name="fotoAct" type="file" accept="image/*" class="form-control" id="" >
                                                                                
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <button name="actualizar_directivo" class="btn btn-primary" type="submit">Actualizar</button>
                                                                            </div>
                                                                        </form>

                                                                    </div>
                                                                </div><!-- /.modal-content -->
                                                            </div><!-- /.modal-dialog -->
                                                        </div><!-- /.modal -->

                                                        <!-- Boton Eliminar -->
                                                        <a href="includes/controler/eliminar.php?idDirectivo=<?php echo $idDirectivo; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>

                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div> <!-- end preview-->
                            </div> <!-- end tab-content-->
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->

        </div> <!-- container -->

    </div> <!-- content -->



<?php include("includes/admin/footer.php") ?>