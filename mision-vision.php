<?php $title = "Misión-Visión"; include("includes/header.php");?>
<?php include("includes/nav.php");?>

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
                                    </ul>
                                </li>
                                <li><a href="contactos.php">Contacto</a></li>
                                <li><a href="direccion.php">Dirección</a>
                                    <ul>
                                        <li><a href="mision-vision.php">Misión y Visión</a></li>
                                        <li><a href="directorio-institucional.php">Directorio Institucional</a></li>
                                        <li><a href="directorio-docentes">Directorio Docentes</a></li>
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
    </header>

    <section>
        <div class="titulo__m-v">
            <h3>Misión y Visión</h3>
        </div>
        <div class="mision__vision contenedor">
            <div class="mision__vision-sub">
                <div class="icono__mv">
                    <i class="fa-solid fa-users"></i>
                </div>
                <h3>Misión</h3>
                <p>Formar a los educandos integralmente, incidiendo en la practica de valores,fortaleciendo la calidad de los servicios educativos acorde a las expectativas de un mundo globalizado, comprometidos con la problematica de nuestra institución y la comunidad.</p>
            </div>

            <div class="mision__vision-sub">
                <div class="icono__mv">
                <i class="fa-solid fa-book-open-reader"></i>
                </div>
                <h3>Visión</h3>
                <p>Ser una institución educativa para el año 2021 responsable y eficiente, con educandos capaces de resolver problemas esenciales de su vida, formados en una ciudadanía con valores e identidad cultural para alcanzar una sociedad justa y trabajadora, que trasciendan el desarrollo de la comunidad domaína</p>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer contenedor">
            <div class="footer__items">
                <h3>IEE AURELIO CARDENAS</h3>
                <div class="insignia-footer">
                    <div class="img-insignia">
                        <img src="img/INSIGNIA .png" alt="insignia">
                    </div>
                    <div class="footer__nombre">
                        <h1 class="footer__titulo">
                            <p>COLEGIO NACIONAL EMBLEMATICO</p>
                            <span>"AURELIO CARDENAS PACHAS"</span>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="footer__items">
                <h3>LIBRO DE RECLAMACIONES</h3>
                <P> Si desea hacer algún comentario o queja puede usar nuestro Libro de Reclamaciones Virtual:</P>
                <div class="libro">
                    <img src="img/layout_icon-1.png" alt="libro-reclamaciones">
                </div>
            </div>
            <div class="footer__items">
                <h3>CONTACTANOS</h3>
                <p><i class="fa-solid fa-location-dot icon-footer"></i> Jr. Comercio N° 720 - Barrio Chacamayo</p>
                <p><i class="fa-solid fa-envelope icon-footer"></i> aureliocardenaspachas@gmail.com</p>
                <p><i class="fa-solid fa-phone icon-footer"></i> Celular 952118802</p>
            </div>
        </div>
    
        
    
        <div class="derechos">
            <p>Diseñado y desarrollado por Kevin E.P. © 2022 | Todos los derechos reservados</p>
        </div>
    
    </footer>
    
</body>
</php>