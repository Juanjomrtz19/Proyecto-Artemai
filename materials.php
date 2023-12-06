<?php

require_once("./generalFiles/conexion.php");

$sql = "Select * from material";
$materials = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <?php require_once("./generalFiles/head.php")?>
        <link rel="stylesheet" type="text/css" href="./css/materials.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <?php require_once("./generalFiles/header.php")?>

        <main>
            <section class="main_materialsgrid">

                <?php if(isset($_SESSION["usuario"])): ?>
                    <a href="addmaterial.php">

                        <article class="material addmaterial" style="background: #00000080">
                            <img src="./img/addsign.png">
                        </article>

                    </a>
                <?php endif; ?>

                <?php foreach($materials as $material): ?>
                    <article class="material" style="background-image: url('./img/img_landing/materiales/<?php echo $material["url"]; ?>');">
                        <h3> <?php echo $material["name"]; ?></h3>
                    </article>    
                <?php endforeach; ?>
            </section>        
        </main>

        <?php require_once("./generalFiles/footer.php")?>
        <script src="./js/menu.js"></script>
    </body>
</html>