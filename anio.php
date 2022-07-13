<?php include("includes/admin/db/conexion.php"); ?>
<?php include("includes/admin/header.php"); ?>

<?php include("includes/admin/left-navbar.php"); ?>
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
            <h3 class="mt-3">Registro de Año Lectivo</h3>

        </div>
        <!-- end Topbar -->

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="card mt-3">
                <div class="card-body">
                    <div class="nav nav-tabs nav-bordered mb-3">
                        <h4 class="header-title mt-5 mt-lg-0 font-15"> Año Lectivo </h4>
                    </div> <!-- end title-->
                    <div class="row">
                        <div class="col-lg-5">
                            <?php
                            if (isset($_SESSION['message'])) { ?>
                                <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show text-xs-right" role="alert">
                                    <?= $_SESSION['message'] ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php
                                session_unset();
                            }
                            ?>
                            <form action="includes/controler/guardar.php" method="POST" class="needs-validation row" novalidate>
                                <div class="mb-3 col-lg-7">
                                    <label class="form-label" for="validationCustom02">Año:</label>
                                    <input name="anio" type="number" class="form-control" id="validationCustom02" placeholder="Digite un año" required>
                                    <div class="invalid-feedback">
                                        Digite un año válido.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button name="guardar_anio" class="btn btn-primary" type="submit">Registrar</button>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-7">
                            <h4 class="mt-3 mb-3">Lista de años lectivos</h4>
                            <table id="state-saving-datatable" class="table activate-select dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Año</th>
                                        <th scope="col">Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $sql = 'SELECT * FROM aniolectivo';
                                        $query = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_array($query)) {
                                            $idAnio = $row['idAnio'];
                                            $nombre = $row['nombre'];
                                    ?>
                                        <tr>
                                            <th scope="row"><?php echo $idAnio; ?></th>
                                            <td><?php echo $nombre; ?></td>
                                            <td>
                                                <!-- Modal editar-->
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#anio-modal-<?php echo $idAnio; ?>"><i class="fa-solid fa-pen-to-square"></i></button>
                                                <div id="anio-modal-<?php echo $idAnio; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="standard-modalLabel">Actualizar Año Lectivo</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="includes/controler/editar.php?idAnio=<?php echo $idAnio; ?>" method="POST" class="needs-validation row" novalidate action="#">
                                                                    <?php
                                                                    if (isset($idAnio)) {
                                                                        $idAnioAct = $idAnio;
                                                                        $sql = "SELECT * FROM aniolectivo WHERE idAnio = $idAnioAct";
                                                                        $queryUdt = mysqli_query($conn, $sql);
                                                                        if (mysqli_num_rows($queryUdt) == 1) {
                                                                            $row = mysqli_fetch_array($queryUdt);
                                                                            $idAnioUdt = $row['idAnio'];
                                                                            $nombreUdt = $row['nombre'];
                                                                        }
                                                                    }
                                                                    ?>
                                                                    <div class="mb-2">
                                                                        <label class="form-label" for="validationCustom01">Año:</label>
                                                                        <input name="anioAct" type="number" class="form-control" value="<?php echo $nombreUdt; ?>" id="validationCustom01" placeholder="Año Lectivo" required>
                                                                        <div class="invalid-feedback">
                                                                            Digite un año válido.
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                                                                            <button name="actualizar_anio" class="btn btn-primary" type="submit">Actualizar</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->

                                                <!-- Boton Eliminar -->
                                                <a href="includes/controler/eliminar.php?idAnio=<?php echo $idAnio; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>

                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body -->
            </div> <!-- end card -->

        </div> <!-- container -->

    </div> <!-- content -->


<?php include("includes/admin/footer.php"); ?>