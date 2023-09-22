<?php 
    require_once './header.php'; 
    require_once './bdd/enchere.php';
    require_once './bdd/objet.php';
?>

    <main class="container">

        <section class="breadcrumbs">
            <a href="../index.php" class="back">
                <img src="../assets/images/back.png" alt="Flèche retour" srcset="">Retour aux enchères
            </a>
        </section>

        <section class="produit">

            <div class="slider">
                <div class="image"></div>
                <div class="image"></div>
                <div class="image"></div>
                <div class="image"></div>
            </div>

            <div class="info-pdt">

                    <div class="titre-pdt">
                        <h1 class="h1">
                            <?php 
                                echo object_info($_GET['id'])[0][1];
                            ?>   
                        </h1>
                    </div>

                    <div class="desc-pdt">
                        <div class="prix-pdt">
                            <?php echo info_enchere($_GET['id_enchere'])[0][3]."€"; ?>   
                        </div>
                        <div class="text-pdt">
                            <?php 
                                echo object_info($_GET['id'])[0][2];
                            ?>   
                        </div>
    
                        <div class="action-pdt">
                            <a href="#" class="btn">Ajouter à la wishlist</a>
                            <a href="#" class="btn-primaire">Enchérir à <?php echo list_enchere($_GET['id'])[0][3]."€"; ?></a>
                        </div>
                    </div>

            </div>

        </section>

        <section class="more">

            <h3 class="h3-large">
                Vous pourrez aussi aimez notre gamme presque visible !
            </h3>

            <div class="line">

                <?php   
                    foreach (list_enchere() as $ench) {
                        echo "<div class=\"article\">
                            <div class=\"image\">
                                <div class=\"like\">
                                    <img src=\"../assets/images/heart.png\" alt=\"like\">
                                </div>
                                <div class=\"cta\">
                                    <a href=\"./details.php?id=".$ench[5]."\" class=\"btn-white\">Enchérir</a>
                                </div>
                            </div>

                            <div class=\"description\">
                                <h3 class=\"h3\">
                                    ".object_info($ench[5])[0][1]."
                                </h3>
                                <p class=\"prix\">
                                    ".$ench[3]."€
                                </p>
                            </div>
                        </div>";
                    }
                ?>

            </div>

        </section>

    </main>
</body>
</html>