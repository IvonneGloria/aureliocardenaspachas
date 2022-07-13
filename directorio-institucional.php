<?php $title = "Directorio-Institucional";
include("includes/admin/db/conexion.php") ?>
<?php
include("includes/header.php");
include("includes/nav.php");
?>



<section>
    <h3 class="directorio__titulo">Personal Jerárquico</h3>
    <div class="directorio__jerarquico contenedor">
        <div class="directorio__contenido">
            <div class="directorio__card">

                <?php
                $sqlDir = "SELECT nom_apell, cargo FROM directivo_actual WHERE idDirectivoActual = 1";
                $queryDir = mysqli_query($conn, $sqlDir);
                $rowDir = mysqli_fetch_array($queryDir);

                $fullNameDir = $rowDir['nom_apell'];
                $cargoDir = $rowDir['cargo'];

                $sqlFotoDir = "SELECT foto FROM directivos WHERE concat(nombres, ' ',apellidos) = '$fullNameDir'";
                $queryFotoDir = mysqli_query($conn, $sqlFotoDir);
                $rowFotoDir = mysqli_fetch_array($queryFotoDir);
                $fotoFileDir = $rowFotoDir['foto'];
                ?>
                <div class="directorio__imagen">
                    <img class="" src="img/directivos/<?php echo $fotoFileDir; ?>" alt="<?php echo $fotoFileDir; ?>">
                </div>
                <div class="directorio__card-nombre">
                    <i class="fa-solid fa-user-tie"></i>
                    <p><?php echo $fullNameDir; ?></p>
                </div>
                <span><?php echo $cargoDir; ?></span>
            </div>
            <div class="directorio__card">
                <?php
                $sqlSub = "SELECT nom_apell, cargo FROM directivo_actual WHERE idDirectivoActual = 2";
                $querySub = mysqli_query($conn, $sqlSub);
                $rowSub = mysqli_fetch_array($querySub);
                $fullNameSub = $rowSub['nom_apell'];
                $cargoSub = $rowSub['cargo'];

                $sqlFotoSub = "SELECT foto FROM directivos WHERE concat(nombres, ' ',apellidos) = '$fullNameSub'";
                $queryFotoSub = mysqli_query($conn, $sqlFotoSub);
                $rowFotoSub = mysqli_fetch_array($queryFotoSub);
                $fotoFileSub = $rowFotoSub['foto'];
                ?>
                <div class="directorio__imagen">
                    <img class="" src="img/directivos/<?php echo $fotoFileSub; ?>" alt="<?php echo $fotoFileDir; ?>">
                </div>
                <div class="directorio__card-nombre">
                    <i class="fa-solid fa-user-tie"></i>
                    <p><?php echo $fullNameSub; ?></p>
                </div>
                <span><?php echo $cargoSub; ?></span>
            </div>
        </div>
    </div>
    <!--Coordinadores de Áreas-->
    <h3 class="directorio__titulo">
        Coordinadores de Áreas
    </h3>
    <div class="coordinadores__contenido contenedor">
        <div class="coordinadores__card">
            <div class="coordinadores__nombres">
                <i class="fa-solid fa-user-tie"></i>
                <p>Asunsión Alvares Aviles</p>
            </div>
            <span>Coordinador de Ciencia y Tecnología y R.H.</span>
        </div>

        <div class="coordinadores__card">
            <div class="coordinadores__nombres">
                <i class="fa-solid fa-user-tie"></i>
                <p>Oliva Bravo Nazar</p>
            </div>
            <span>Coordinadora de Matemática y E.F.</span>
        </div>

        <div class="coordinadores__card">
            <div class="coordinadores__nombres">
                <i class="fa-solid fa-user-tie"></i>
                <p>Robert D. Blas Huerta</p>
            </div>
            <span>Coordinador de Arte y Cultura</span>
        </div>

        <div class="coordinadores__card">
            <div class="coordinadores__nombres">
                <i class="fa-solid fa-user-tie"></i>
                <p>Edith M. Gamarra Santamaria</p>
            </div>
            <span>Coordinadora de Ciencias Sociales</span>
        </div>

        <div class="coordinadores__card">
            <div class="coordinadores__nombres">
                <i class="fa-solid fa-user-tie"></i>
                <p>Rosario I. Rubina Mejia</p>
            </div>
            <span>Coordinador de Comunicación</span>
        </div>

        <div class="coordinadores__card">
            <div class="coordinadores__nombres">
                <i class="fa-solid fa-user-tie"></i>
                <p>Francisco Villanueva Fretel</p>
            </div>
            <span>Coordinador de T.O.E.</span>
        </div>
    </div>
    <!--PERSONAL DOCENTE-->
    <h3 class="directorio__titulo">
        Personal Docente
    </h3>
    <div class="docentes__contenido contenedor">
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>Luisa E. Altamirado Raymundez</p>
            </div>
            <span>Ciencia y Tecnoogía</span>
        </div>

        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>Yaritza Alvarez Huaman</p>
            </div>
            <span>Arte y cultura</span>
        </div>

        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>Rodolfo R. Alvarez Ramirez</p>
            </div>
            <span>Matemática</span>
        </div>

        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>Yésica Anaya Flores</p>
            </div>
            <span>Ciencia y Tecnología</span>
        </div>

        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>Jean P. Aponte Chavez</p>
            </div>
            <span>Educación Física</span>
        </div>

        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>Pamela R. Bailon Cajavilca</p>
            </div>
            <span>Ciencias Sociales</span>
        </div>
    </div>

    <div class="btnDocMore">
        <input class="btn-docentesMore" type="submit" id="btn-docentesMore" value="Mostrar más docentes" onclick="Mostrar_Ocultar()">
    </div>
    <div class="docentes__contenido" id="docentesMore" style="display: none">
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>Eliana R. Bailon Gargate</p>
            </div>
            <span>Comunicación</span>
        </div>

        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>Eliana R. Bailon Gargate</p>
            </div>
            <span>Comunicación</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>Carlos A. Bernal Vigilio</p>
            </div>
            <span>Religión</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>Jhon R. Bernanrdo Gaspar</p>
            </div>
            <span>Arte y Cultura</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>Hilda L. Borja Mallqui</p>
            </div>
            <span>Matemática</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>Amanda Calderon Obregon</p>
            </div>
            <span>E.P.T.</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>Pilar M. Calderon Palacios</p>
            </div>
            <span>Comunicación</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>Carlos P. Carbajal Velasquez</p>
            </div>
            <span>Historia y Geografía</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>Janeth L. Carlosvisa Tejeda</p>
            </div>
            <span>C.C.S.S.</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>Cesar Chavez Reymundo</p>
            </div>
            <span>C.C.S.S.</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>Ludy Liz Chavez Sudario</p>
            </div>
            <span>Ingles</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>Ronald R. Claudio Patricio</p>
            </div>
            <span>Matematica y Fisica</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>Hugo W. Espinoza Alvarado</p>
            </div>
            <span>Historia y Geografia</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>Helmut Fabian Paulino</p>
            </div>
            <span>Matematica</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>Fausto Fructus Rojas</p>
            </div>
            <span>Comunicacion</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>GARNILLO RAMOS, Danina C.</p>
            </div>
            <span>Ingles</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>HIPOLO ZEVALLOS, Róger M.</p>
            </div>
            <span>C y T</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>INOCENTE CHACON, Ronal</p>
            </div>
            <span>C y T</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>LAVERIANO HUANCA, Malaquias A.</p>
            </div>
            <span>C.C.S.S.</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>LEON HUERTA, Alex C.</p>
            </div>
            <span>Arte y Cultura</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>PARDO SOLORZANO, Onésima</p>
            </div>
            <span>Ingles</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>POZO FALCON, Luz</p>
            </div>
            <span>C y T</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>REYMUNDO RAMOS, Delia P.</p>
            </div>
            <span>Ingles</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>ROBLES SANTILLAN, Elvia G.</p>
            </div>
            <span>Comunicación</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>ROJAS RIVERA, Leo A.</p>
            </div>
            <span>Matemática</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>ROSADO SALAZAR, Keny</p>
            </div>
            <span>C.C.S.S.</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>RUBINA MEJIA, Marcial</p>
            </div>
            <span>Matemática</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>SAEN MOYA, Tito</p>
            </div>
            <span>Comunicación</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>SALAZAR ORTEGA, Mave V.</p>
            </div>
            <span>Ingles</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>SANTOS GARRIDO, Meglin</p>
            </div>
            <span>Comunicación</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>SERAFIN RIVERA, Eder</p>
            </div>
            <span>Com. e Informática</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>TARAZONA CAMONES, Roque G</p>
            </div>
            <span>Comunicación</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>TIBURCIO FERRER, Javier V</p>
            </div>
            <span>C y T</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>URETA TORRES, Odilón</p>
            </div>
            <span>C.C.S.S.</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>VALENZUELA RAMOS, Tony F</p>
            </div>
            <span>Educación Física</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>VILLANUEVA HUAMAN, Rocío</p>
            </div>
            <span>Comunicación</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>VILLANUEVA MOYA, Luis A</p>
            </div>
            <span>E.P.T.</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>VILLANUEVA PIÑAN, Wilmer</p>
            </div>
            <span>Educación Física</span>
        </div>
        <div class="docentes__card">
            <div class="docentes__nombres">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>ZEVALLOS VILLANUEVA, Salvador</p>
            </div>
            <span>religión</span>
        </div>
    </div>


    <!--PERSONAL AUXILIARES-->
    <h3 class="directorio__titulo">
        Auxiliares
    </h3>
    <div class="auxiliares__contenido contenedor">
        <div class="auxiliares__card">
            <div class="auxiliares__nombres">
                <i class="fa-solid fa-user-tie"></i>
                <p> Juan Taylor Ayala santillan</p>
            </div>
            <span>Educación Física</span>
        </div>

        <div class="auxiliares__card">
            <div class="auxiliares__nombres">
                <i class="fa-solid fa-user-tie"></i>
                <p>Juan Huerta Alvarado</p>
            </div>
            <span>C.T.</span>
        </div>

        <div class="auxiliares__card">
            <div class="auxiliares__nombres">
                <i class="fa-solid fa-user-tie"></i>
                <p>Cerilo Leon Vicente</p>
            </div>
            <span>Primaria</span>
        </div>

        <div class="auxiliares__card">
            <div class="auxiliares__nombres">
                <i class="fa-solid fa-user-tie"></i>
                <p>Tomotea Minaya Bravo</p>
            </div>
            <span>Auxiliar</span>
        </div>

        <div class="auxiliares__card">
            <div class="auxiliares__nombres">
                <i class="fa-solid fa-user-tie"></i>
                <p>Cesar Montes Acuña</p>
            </div>
            <span>Comuniccación</span>
        </div>
    </div>

    <!--PERSONAL ADMINISTRATIVO-->
    <h3 class="directorio__titulo">
        Personal Administrativo
    </h3>
    <div class="administrativos__contenido contenedor">
        <div class="administrativos__card">
            <div class="administrativos__nombres">
                <i class="fa-solid fa-user-tie"></i>
                <p> Mlagros Paola Vega Mejia</p>
            </div>
            <span>Psicologa</span>
        </div>

        <div class="administrativos__card">
            <div class="administrativos__nombres">
                <i class="fa-solid fa-user-tie"></i>
                <p>Mercedes Villanueva Valentin</p>
            </div>
            <span>Aux. de Laboratorio</span>
        </div>

        <div class="administrativos__card">
            <div class="administrativos__nombres">
                <i class="fa-solid fa-user-tie"></i>
                <p>Leonela Rocio Espinoza Huaman</p>
            </div>
            <span>Auxiliar de Biblioteca</span>
        </div>

        <div class="administrativos__card">
            <div class="administrativos__nombres">
                <i class="fa-solid fa-user-tie"></i>
                <p>Henry Reyes Villanera</p>
            </div>
            <span>CIST</span>
        </div>
    </div>
</section>
<!--PERSONAL DE SERVICIO Y VIGILANCIA-->
<h3 class="directorio__titulo">
    Personal de Servicio y Vigilancia
</h3>
<div class="vigilancia__contenido contenedor">
    <div class="vigilancia__card">
        <div class="vigilancia__nombres">
            <i class="fa-solid fa-user-tie"></i>
            <p>Edmundo Alvarado Mallqui</p>
        </div>
        <span>Personal de servicio</span>
    </div>

    <div class="vigilancia__card">
        <div class="vigilancia__nombres">
            <i class="fa-solid fa-user-tie"></i>
            <p>Maria Lorenzo Evangelista</p>
        </div>
        <span>Personal de servicio</span>
    </div>

    <div class="vigilancia__card">
        <div class="vigilancia__nombres">
            <i class="fa-solid fa-user-tie"></i>
            <p>Dany Daniel Mojonero Piñan</p>
        </div>
        <span>Vigilante</span>
    </div>


    <div class="vigilancia__card">
        <div class="vigilancia__nombres">
            <i class="fa-solid fa-user-tie"></i>
            <p>Elida Palacios Castillo</p>
        </div>
        <span>Personal de Servicio</span>
    </div>
    <div class="vigilancia__card">
        <div class="vigilancia__nombres">
            <i class="fa-solid fa-user-tie"></i>
            <p>Luis Alberto Peña Lopez</p>
        </div>
        <span>Vigilante</span>
    </div>
    <div class="vigilancia__card">
        <div class="vigilancia__nombres">
            <i class="fa-solid fa-user-tie"></i>
            <p>Hilder Sanchez Solorzano</p>
        </div>
        <span>Personal de Servicio</span>
    </div>
    <div class="vigilancia__card">
        <div class="vigilancia__nombres">
            <i class="fa-solid fa-user-tie"></i>
            <p>Edmundo Alvarado Mallqui</p>
        </div>
        <span>Personal de Servicio</span>
    </div>
</div>

<?php include("includes/footer.php"); ?>