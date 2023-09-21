<?php require_once './header.php'; ?>

    <main class="container">

        <section class="breadcrumbs">
            <a href="../index.php" class="back">
                <img src="../assets/images/back.png" alt="Flèche retour" srcset="">Retour aux enchères
            </a>
        </section>

        <section class="ajout">

            <h1 class="h1">Créer une nouvelle enchère</h1>

            <form action="CreateEnchere.php" method="post" class="form" enctype="multipart/form-data">

                <div class="form-image">
                    <label for="img">Ajouter les images de votre produit invisible</label>
                    <div class="img">
                        <input type="file" name="img" id="img" required />
                    </div>
                </div>

                <div class="form-content">

                    <div class="form-item">
                        <label for="titre">Titre de l’article</label>
                        <input type="text" name="titre" id="titre" required placeholder="Objet invisible de luxe"/>
                    </div>

                    <div class="separator"></div>

                    <div class="form-item">
                        <label for="desc">Description de l’article</label>
                        <input type="text-area" name="desc" id="desc" required placeholder="Écris la description de ton objet invisible..."/>
                    </div>

                </div>

                <div class="form-content">

                    <div class="form-item">
                        <label for="date-début">Date de début de l’enchère</label>
                        <input type="date" name="date-début" id="date-début" required/>
                    </div>

                    <div class="separator"></div>

                    <div class="form-item">
                        <label for="date-fin">Date de fin de l’enchère</label>
                        <input type="date" name="date-fin" id="date-fin" required/>
                    </div>

                </div>

                <div class="form-content">

                    <div class="form-item">
                        <label for="prix">Prix minimum de l'enchère</label>
                        <input type="number" name="prix" id="prix" step="0.01" required placeholder="0,00€"/>
                    </div>

                </div>

                <div class="valider">
                    <input type="submit" value="Ajouter le produit" class="btn-primaire"/>
                </div>

            </form>

        </section>

    </main>
</body>
</html>