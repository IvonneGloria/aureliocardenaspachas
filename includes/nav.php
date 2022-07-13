<body>
    <header class="header">
        <div class="encabezado">

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

        <?php include("includes/redessociales.php"); ?>
    </header>