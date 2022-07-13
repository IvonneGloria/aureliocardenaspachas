<?php $title = "Inicio"; include("includes/header.php"); ?>

<body>
    <header class="header">
        <div class="encabezado">
            <div class="header-info contenedor">
                <div class="info">
                    <a href=""><i class="fa-solid fa-phone"></i> 952118802</a>
                    <a href=""><i class="fa-solid fa-location-dot"></i> Jr. Comercio N° 207 Barrio Chacamayo</a>
                </div>
                <div class="logo-minedu">
                    <img class="minedu" src="img/Logo_MINEDU.png" alt="Logo_MINEDU">
                </div>
            </div>

            <div class="header-nav contenedor">
                <div class="insignia">
                    <div class="img-insignia">
                        <img src="img/INSIGNIA .png" alt="insignia">
                    </div>
                        <h1 class="titulo">
                            <p>COLEGIO NACIONAL EMBLEMATICO</p>
                            <span>"AURELIO CARDENAS PACHAS"</span>
                        </h1>
                </div>

                <div class="menu__contenedor">
                    <div class="menu">
                        <input type="checkbox" id="check__menu">
                        <label id="label__check" for="check__menu">
                            <i class="fas fa-bars icon__menu"></i>
                        </label>
                        <nav>
                            <ul>
                                <li><a href="index.php">Inicio</a>
                                    <ul>
                                        <li><a href="bienvenida.php">Bienvenida</a></li>
                                        <li><a href="mensaje.php">Mensaje</a></li>
                                        <li><a href="galeria.php">Galeria</a></li>
                                    </ul>
                                </li>
                                <li><a href="contactos.php">Contacto</a></li>
                                <li><a>Dirección</a>
                                    <ul>
                                        <li><a href="mision-vision.php">Misión y Visión</a></li>
                                        <li><a href="directorio-institucional.php">Directorio Institucional</a></li>
                                        
                                        <li><a href="organigrama.php">Organigrama</a></li>
                                    </ul>
                                </li>
                                <li><a href="tramites.php">Trámites</a></li>
                                <li><a href="servicios.php">Servicios</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
        
        <div class="slider">
            <!-- fade css -->
            <div class="myslide fade" style="display: block;">
                <div class="txt">
                    <h2>AURELIO CÁRDENAS</h2>
                    <p>Alma Mater de la Provincia de Dos de Mayo</p>
                </div>
                <img class="img-slider" src="img/slider/img1.jpg" style="width: 100%; height: 100%;">
            </div>

            <div class="myslide fade">
                <div class="txt">
                    <h2>SOMOS EMBLEMÁTICO</h2>
                    <p>Institución Educativa con Infraestructura Moderna</p>
                </div>
                <img class="img-slider" src="img/slider/img2.jpg" style="width: 100%; height: 100%;">
            </div>

            <div class="myslide fade">
                <div class="txt">
                    <h2>LA MEJOR PLANA DOCENTE</h2>
                    <p>Profesionales Comprometidos con la Educación</p>
                </div>
                <img class="img-slider" src="img/slider/img3.jpg" style="width: 100%; height: 100%;">
            </div>
            <!-- /fade css -->

            <!-- onclick js -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <div class="dotsbox" style="text-align: center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
            <!-- /onclick js -->
        </div>

        <?php include("includes/redessociales.php") ?>
    </header>

    <main>
        <div class="intro contenedor">
            <h2 class="intro__titulo">BIENVENIDOS</h2>
            <p class="intro__texto">
                El C.N.E Aurelio Cárdenas con la mejor plana docente, con aulas experimentales, materiales y
                equipamiento acorde a la educación moderna que exige el tiempo.
                Nuestro innovador sistema propone un enfoque educativo cíclico y gradual, mediante técnicas y procesos
                de mejora continua, sobre la base de una educación integral de alto rendimiento. <br>

                <span>!Creemos en la exigencia!</span>
            <div class="intro__firma">
                <p>Profesor Máximo Euler Gamarra Santamaría </p>
                <span>DIRECTOR</span>
            </div>
            </p>
        </div>

        <div class="titulo__areas contenedor">
            <p>áreas de coordinación</p>
        </div>

        <div class="jefatura contenedor">

            <div class="jefatura__contenido">
                <img src="img/jefaturas/rubina.jpg" alt="comunicacion">
                <p>
                    COMUNICACION
                </p>
            </div>
            <div class="jefatura__contenido">
                <img src="img/jefaturas/oliva.jpg" alt="">
                <p>
                    MATEMATICAS
                </p>
            </div>
            <div class="jefatura__contenido">
                <img src="img/jefaturas/C.C.S.S.jpeg" alt="">
                <p>
                    C.C.S.S
                </p>
            </div>
            <div class="jefatura__contenido">
                <img src="img/jefaturas/francisco.jpeg" alt="">
                <p>
                    TOE
                </p>
            </div>
            <div class="jefatura__contenido">
                <img src="img/jefaturas/dimasArte.jpg" alt="">
                <p>
                    EPT
                </p>
            </div>
            <div class="jefatura__contenido">
                <img src="img/jefaturas/nelson.jpg" alt="">
                <p>
                    EPT
                </p>
            </div>
            <div class="jefatura__contenido">
                <img src="img/jefaturas/cyt.jpg" alt="Ciencia y Tecnología">
                <p>
                    CYT
                </p>
            </div>
        </div>
    </main>

<?php
include("includes/footer.php");
?>