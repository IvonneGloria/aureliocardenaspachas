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
            <h3 class="mt-3">Asignar Directivos</h3>
        </div>
        <!-- end Topbar -->

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="mt-3">
                <h3 class="directorio__titulo">Personal Jerárquico Asignado Actualmente</h3>
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
                <div class="directorio__jerarquico contenedor">
                    <div class="directorio__contenido">
                        <div class="directorio__card">
                            <?php
                            $sqlDir = "SELECT nom_apell, cargo FROM directivo_actual WHERE idDirectivoActual = 1";
                            $queryDir = mysqli_query($conn, $sqlDir);
                            $rowDir = mysqli_fetch_array($queryDir);
                            $fullNameDir = $rowDir['nom_apell'];
                            $cargoDir = $rowDir['cargo'];
                            ?>
                            <div class="directorio__card-nombre">
                                <i class="fa-solid fa-user-tie"></i>
                                <h5><?php echo $fullNameDir; ?></h5>
                            </div>
                            <h4 class="header-title"><?php echo $cargoDir; ?></h4>
                        </div>
                        <div class="directorio__card">
                            <?php
                            $sqlSub = "SELECT nom_apell, cargo FROM directivo_actual WHERE idDirectivoActual = 2";
                            $querySub = mysqli_query($conn, $sqlSub);
                            $rowSub = mysqli_fetch_array($querySub);
                            $fullNameSub = $rowSub['nom_apell'];
                            $cargoSub = $rowSub['cargo'];
                            ?>
                            <div class="directorio__card-nombre">
                                <i class="fa-solid fa-user-tie"></i>
                                <h5><?php echo $fullNameSub; ?></h5>
                            </div>
                            <h4 class="header-title"><?php echo $cargoSub; ?></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Lista Directores -->
            <div class="row mt-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Lista de Directores(as)</h4>

                            <div class="tab-content">
                                <div class="tab-pane show active" id="basic-datatable-preview">
                                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                        <thead>

                                            <tr>
                                                <th>Nombres y Apellidos</th>
                                                <th>Cargo</th>
                                                <th>Año Lectivo</th>
                                                <th>Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT idDirectivo, concat(nombres, ' ',apellidos) as fullname, cargo.nombre as cargo, 
                                            aniolectivo.nombre as anio FROM directivos 
                                            INNER JOIN cargo ON directivos.idCargo = cargo.idCargo 
                                            INNER JOIN aniolectivo ON directivos.idAnio = aniolectivo.idAnio  WHERE directivos.idCargo = 2 ORDER by anio desc";
                                            $query = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($query)) {
                                                $idDirectivo = $row['idDirectivo'];
                                                $nombresAppell = $row['fullname'];
                                                $cargo = $row['cargo'];
                                                $anio = $row['anio'];
                                            ?>
                                                <tr>
                                                    <td><?php echo $nombresAppell; ?></td>
                                                    <td><?php echo $cargo; ?></td>
                                                    <td><span class="badge badge-outline-warning p-1 font-14"><?php echo $anio; ?></span></td>
                                                    <td>
                                                    <a href="includes/controler/editar.php?idActual=<?php echo $idDirectivo; ?>&cargo=1" class="btn btn-small btn-success"> Asignar <i class="fa-solid fa-user-plus"></i></a>
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

            <!-- Lista Sub Directores -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Lista de Sub Directores(as)</h4>
                            <div class="tab-content">
                                <div class="tab-pane show active" id="scroll-vertical-preview">
                                    <table id="scroll-vertical-datatable" class="table dt-responsive nowrap">
                                        <thead>
                                            <tr>
                                                <th>Nombres y Apellidos</th>
                                                <th>Cargo</th>
                                                <th>Año Lectivo</th>
                                                <th>Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT idDirectivo, concat(nombres, ' ',apellidos) as fullname, cargo.nombre as cargo, 
                                            aniolectivo.nombre as anio FROM directivos 
                                            INNER JOIN cargo ON directivos.idCargo = cargo.idCargo 
                                            INNER JOIN aniolectivo ON directivos.idAnio = aniolectivo.idAnio  WHERE directivos.idCargo = 3 ORDER by anio desc";
                                            $query = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($query)) {
                                                $idDirectivo = $row['idDirectivo'];
                                                $nombresAppell = $row['fullname'];
                                                $cargo = $row['cargo'];
                                                $anio = $row['anio'];
                                            ?>
                                                <tr>
                                                    <td><?php echo $nombresAppell; ?></td>
                                                    <td><?php echo $cargo; ?></td>
                                                    <td><span class="badge badge-outline-warning p-1 font-14"><?php echo $anio; ?></span></td>
                                                    <td>
                                                        <a href="includes/controler/editar.php?idActual=<?php echo $idDirectivo; ?>&cargo=2" class="btn btn-small btn-success"> Asignar <i class="fa-solid fa-user-plus"></i></a>
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

<?php include("includes/admin/footer.php"); ?>