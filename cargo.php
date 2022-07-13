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
            <h3 class="mt-3">Registro de Cargos de Personal</h3>

        </div>
        <!-- end Topbar -->

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="card mt-3">
                <div class="card-body">
                    <div class="nav nav-tabs nav-bordered mb-3">
                        <h4 class="header-title mt-5 mt-lg-0 font-15"> Cargos </h4>
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
                                    <label class="form-label" for="validationCustom02">Cargo:</label>
                                    <input name="cargo" type="text" class="form-control" id="validationCustom02" placeholder="Digite un cargo" required>
                                    <div class="invalid-feedback">
                                        Digite un cargo válido.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button name="guardar_cargo" class="btn btn-primary" type="submit">Registrar</button>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-7">
                            <h4 class="mt-3 mb-3">Lista Cargos</h4>
                            <table id="state-saving-datatable" class="table activate-select dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Cargo</th>
                                        <th scope="col">Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sqlCargo = 'SELECT * FROM cargo';
                                    $queryCargo = mysqli_query($conn, $sqlCargo);
                                    while ($rowCargo = mysqli_fetch_array($queryCargo)) {
                                        $idCargo = $rowCargo['idCargo'];
                                        $nombre = $rowCargo['nombre'];
                                    ?>
                                        <tr>
                                            <th scope="row"><?php echo $idCargo; ?></th>
                                            <td><?php echo $nombre; ?></td>
                                            <td>
                                                <!-- Standard modal -->
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#cargo-modal-<?php echo $idCargo; ?>"><i class="fa-solid fa-pen-to-square"></i></button>
                                                <div id="cargo-modal-<?php echo $idCargo; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="standard-modalLabel">Actualizar Cargo</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="includes/controler/editar.php?idCargo=<?php echo $idCargo; ?>" method="POST" class="needs-validation row" novalidate action="#">
                                                                    <?php
                                                                        if (isset($idCargo)) {
                                                                            $idCargoAct = $idCargo;
                                                                            $sql = "SELECT * FROM cargo WHERE idCargo = $idCargoAct";
                                                                            $queryUdt = mysqli_query($conn, $sql);

                                                                            if (mysqli_num_rows($queryUdt) == 1) {
                                                                                $row = mysqli_fetch_array($queryUdt);
                                                                                $idCargoUdt = $row['idCargo'];
                                                                                $nombreUdt = $row['nombre'];
                                                                            }
                                                                        }
                                                                    ?>
                                                                    <div class="mb-2">
                                                                        <label class="form-label" for="validationCustom01">Cargo:</label>
                                                                        <input name="cargoAct" type="text" class="form-control" value="<?php echo $nombreUdt; ?>" id="validationCustom01" placeholder="Actualizar Cargo" required>
                                                                        <div class="invalid-feedback">
                                                                            Digite un cargo válido.
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                                                                            <button name="actualizar_cargo" class="btn btn-primary" type="submit">Actualizar</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->

                                                <!-- Boton Eliminar -->
                                                <a href="elimr.php?idDirectivo=<?php echo $x; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>

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