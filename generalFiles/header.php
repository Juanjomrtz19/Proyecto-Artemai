<?php 
    session_start();
?> 

<header>
    <section class="header_imgcontainer">
        <a href="./index.php">
            <img src="./img/logo.png" alt="">
        </a>
    </section>

    <?php if(isset($_SESSION["usuario"])):?>
        <section class="username">
            <p>Bienvenido <?php echo $_SESSION["usuario"]["name"] ?></p>
        </section>
    <?php endif;?>    

    <nav>
        <ul class="menu">    
            <li><a href="./materials.php" class="border_ofmenu">Materiales</a></li>
            <li class="submenu">
                <a href="" class="border_ofmenu">Conócenos</a>
                <ul class="submenu-content">
                    <li><a href="">Quiénes somos</a></li>
                    <li><a href="">A que nos dedicamos</a></li> 
                </ul>    
            </li>    
            <li class="submenu">
                <a href="" class="border_ofmenu">Trabajos</a>
                <ul class="submenu-content">
                    <li><a href="">Fuentes</a></li>
                    <li><a href="">Chimeneas</a></li>
                    <li><a href="">Escaleas y balaustradas</a></li>
                    <li><a href="">Columnas</a></li>
                    <li><a href="">Encimeras</a></li>
                    <li><a href="">Recercados de piscina</a></li>
                    <li><a href="">Platos de ducha</a></li>
                    <li><a href="">Lavabos</a></li>
                    <li><a href="">Artículos funerarios</a></li>
                    <li><a href="">Artículos de regalo</a></li>
                </ul>
            </li>
            <li><a href="" class="border_ofmenu">Contáctanos</a></li>
            <?php if(isset($_SESSION["usuario"])): ?>
                <li><a href="./generalFiles/logout.php" class="border_ofmenu">Cerrar sesión</a></li>
            <?php endif; ?>
        </ul>

        <article class="menu-toggle">
            <i class="fas fa-bars"></i>
        </article>

    </nav>
    <script src="../js/menu.js"></script>
</header>