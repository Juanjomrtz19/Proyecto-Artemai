<!DOCTYPE html>
<html>
    <head>
        <title>Artemai de la piedra S.L.</title>
        <link rel="stylesheet" type="text/css" href="./css/header.css">
        <link rel="stylesheet" type="text/css" href="./css/index.css">
        <link rel="stylesheet" type="text/css" href="./css/footer.css">
        <script src="https://kit.fontawesome.com/eee8b9a576.js" crossorigin="anonymous"></script>
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
    </body>
</html>