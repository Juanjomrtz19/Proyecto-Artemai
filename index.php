<!DOCTYPE html>
<html>
    <head>
        <?php require_once("./generalFiles/head.php")?>
        <link rel="stylesheet" type="text/css" href="./css/index.css">
    </head>
    <body>
        <?php require_once("./generalFiles/header.php");?>
        <main>
            <section class="main_presentation">
                <h1>Bienvenido a Artemai de la piedra s.l. </h1>
                <section class="main_slidercontainer">
                    <section class="slider">
                        <article class="slide" style="background-image: url('./img/img_landing/slider/chimeneas.jpeg');"></article>
                        <article class="slide" style="background-image: url('./img/img_landing/slider/Escaleras-balaustradas.jpeg');"></article>
                        <article class="slide" style="background-image: url('./img/img_landing/slider/fregaderos.jpeg');"></article>
                        <article class="slide" style="background-image: url('./img/img_landing/slider/lavabo.jpeg');"></article>
                        <article class="slide" style="background-image: url('./img/img_landing/slider/encimera.jpeg');"></article>
                    </section> 
                    <button id="prevBtn" class="slider-button">Anterior</button>
                    <button id="nextBtn" class="slider-button">Siguiente</button>
                </section>
            </section>
            
            <section class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed//AzRFD4ymIBo" frameborder="0" allowfullscreen></iframe>
            </section>
            
            <section class="text-phone">
                    <p>
                        Artemai se encarga de crear productos con piedra de manera artesanal con más de 30 años de experienza. </br>
                    </p>
                    <p>
                    Si está interesado en decorar su casa o zona de confort en este sitio web podrás echar un vistazo a todo lo que hacemos. </br>
                    </p>
            </section>

            <section class="main_materiales">
                <h2>Algunos materiales</h2>
                <section class="main_materialsgrid">
                        <article class="material" style="background-image: url('./img/img_landing/materiales/amarillo_triana.jpeg">
                            <span>Amarillo triana</span>
                            <button>Ver materiales</button>
                        </article >

                        <article class="material" style="background-image: url('./img/img_landing/materiales/blanco_macael.jpeg">
                            <span> Mármol blanco Macael</span>
                            <button>Ver materiales</button>
                        </article>

                        <article class="material" style="background-image: url('./img/img_landing/materiales/marron_emperador.jpeg">
                            <span>Marrón emperador</span>
                            <button>Ver materiales</button>
                        </article>

                        <article class="material" style="background-image: url('./img/img_landing/materiales/rosa_portugues.jpeg">
                            <span>Rosa portugues</span>
                            <button>Ver materiales</button>
                        </article>

                        <article class="material" style="background-image: url('./img/img_landing/materiales/crema_marfil.jpeg">
                            <span>Crema marfil</span>
                            <button>Ver materiales</button>
                        </article>
                </section>
            </section>
        </main>
        <?php require_once("./generalFiles/footer.php");?>
        <script src="./js/index.js"></script>
        <script src="./js/menu.js"></script>
    </body>
</html>