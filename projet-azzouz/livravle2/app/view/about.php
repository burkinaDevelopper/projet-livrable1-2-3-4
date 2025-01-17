<?php include_once('header.php') ?>





<div class="body-1">


    <!-- single page section of about us -->
    <section class="magazine">
        <h1 class="magazine__title">
            Livrable 1:
        </h1>
        <div class="magazine__main-content">
            <p>Ce projet consiste en la création d'une imitation du site Google News, avec cinq pages HTML et des
                styles CSS intégrant des techniques avancées telles que Grid et Flexbox. L'objectif est de
                reproduire les fonctionnalités principales du site, en mettant en œuvre une page d'actualités, une
                page de formulaire, une page d'article principal, page présentant tous les articles sélectionnés,et
                une à propos.</p>
        </div>

        <!-- main content of about us page -->

        <main class="magazine__main-content">
            <h3> 1. Page d'Actualités (landing page): </h3>
            <p>
                La page d'actualités est la première vue du site, accueillant les utilisateurs avec une sélection de
                8 à 10 articles de presse. Chaque article est représenté par un titre et une illustration. Le design
                est réalisé en utilisant Grid et Flexbox pour une mise en page efficace et responsive.

            </p>

            <figure class="figure">
                <img class="figure__img" src="<?= PUBLIQUE ?>/asset/images/Screenshot home.png" alt="">
            </figure>
            <cite class="magazine__citation">
                Capture d'ecran pour la page d'accueil/landing page nommé "index.html".
            </cite>
            <!-- second page: formular page -->
            <h3> 2. Page Article Principal: </h3>
            <p>
                La page d'article principal présente en détail un article spécifique. Elle affiche un titre, une accroche (résumé), le corps de l'article et une illustration. Le design est soigné, mettant en valeur le contenu tout en garantissant une expérience utilisateur optimale.

            </p>
            <figure class="figure">
                <img class="figure__img" src="<?= PUBLIQUE ?>/asset/images/Screenshot article.png" alt="">
            </figure>
            <cite class="magazine__citation">
                Capture d'ecran pour page Article Principal
            </cite>
            <!-- third page: the main article -->
            <h3>3. Page Formulaire:</h3>
            <p>La page formulaire est conçue pour permettre aux utilisateurs de soumettre des articles ou des commentaires. Elle offre une interface conviviale avec des champs appropriés et un design responsive pour s'adapter à divers dispositifs.
                Nous avons conçu un ensemble de champs de saisie pour recueillir
                des informations de profil utilisateur telles que le nom, l'e-mail et la biographie.
                Chaque champ de saisie est soigneusement stylisé pour améliorer l'esthétique globale et
                l'expérience utilisateur.
            </p>

            <figure class="figure">
                <img class="figure__img" src="<?= PUBLIQUE ?>/asset/images/Screenshot formulaire.png" alt="">
            </figure>
            <cite class="magazine__citation">
                Capture d'ecran pour page Formulaire
            </cite>
            <!-- fourth page:showcase articles -->
            <h3>4. Page Présentation des Articles Sélectionnés:</h3>
            <p>Cette page regroupe les articles sélectionnés par catégorie ou source, présentant les trois titres des articles principaux pour chaque journal. L'utilisation de techniques CSS avancées assure une mise en page esthétique et responsive.</p>
            <figure class="figure">
                <img class="figure__img" src="<?= PUBLIQUE ?>/asset/images/Screenshot Page Présentation des Articles Sélectionnés.png" alt="">
            </figure>
            <cite class="magazine__citation">
                Capture d'ecran pour la Page Présentation des Articles Sélectionnés
            </cite>
            <h3>5. Page "À Propos":</h3>
            <p> La page "À Propos" offre une vue d'ensemble du site en regroupant les différentes pages créées dans le cadre de ce projet avec la déscription de chaque page ci-joint caprure d'écran prise.</p>


            <h3>Livrables annexes:</h3>

            <p>- Un fichier de styles CSS global qui harmonise l'apparence du site sur toutes les pages.</p>
            <p>- Des images optimisées et bien intégrées pour améliorer l'expérience visuelle.</p>
            <p>- Des pages HTML bien structurées, respectant les normes de développement web.</p>
            </p>

            <h3>Remarques:</h3>
            <p>Le site est responsive, assurant une expérience utilisateur cohérente sur une gamme d'appareils, des grands écrans aux smartphones.</p>
            <h3>Date de Livrable:</h3>
            <p>Le projet sera livré d'ici le 14 Décembre 2022, garantissant la disponibilité du site dans les délais impartis.

                Ce rapport synthétise les principales caractéristiques du projet, mettant en évidence les choix de conception et les techniques utilisées pour atteindre les objectifs donner </p>
        </main>
    </section>

    <section class="magazine">
        <h1 class="magazine__title">
            Livrable 2:
        </h1>
        <div class="magazine__main-content">
            <p> architecture MVC (Modèles, Vues, Contrôleurs)</p>
            <p> Base de donne en dure dans fichier csv(asset/t_article.csv)</p>
            <p> Authentification fichier csv csv(asset/login.csv) (admin,admin)(user,user)</p>
            <p>Clic sur "Ajouter au favorie" des favoris via les cookie</p>
            <p>sauvegarde des favoris via les cookie</p>
        </div>
    </section>
    <section class="magazine">
        <h1 class="magazine__title">
            Livrable 3:
        </h1>
        <div class="magazine__main-content">
            <p> architecture MVC (Modèles, Vues, Contrôleurs)</p>
            <p>Importer les fichier t_article.sql dans la base de donner 4ipdw_2023 </p>
            <p> Base de donne en dynamique</p>
            <p> Authentification via API REST (admin,admin)(user,user)</p>
            <p>publiciter via une API</p>
            <p>recherche un article par son titre ou sa category</p>
            <p>sauvegarde des favoris via les sessions</p>
        </div>
    </section>
    <section class="magazine">
        <h1 class="magazine__title">
            Livrable 4:
        </h1>
        <div class="magazine__main-content">
            <p> architecture MVC (Modèles, Vues, Contrôleurs)</p>
            <p>Importer les fichier t_article.sql dans la base de donner 4ipdw_2023 </p>
            <p> Base de donne en dynamique</p>
            <p> Authentification via API REST (admin,admin)(user,user)</p>
            <p>publiciter via une API</p>
            <p>recherche un article par son titre ou sa category</p>
            <p>sauvegarde des favoris via les sessions en Ajax sans recharger la page</p>
            <p>supprimer des favoris via les sessions en Ajax sans recharger la page</p>
            <p>Afficher les detail des articles au click sur le titre d'un article</p>
        </div>
    </section>
</div>


<hr style="margin-top: 20px;margin-bottom: 20px;border-color:transparent ;">
<footer class="footer">

    <div class="box-container" style="max-width: 1110px; margin: auto; padding: 16pxs;border-radius: 18px;">

        <div class="box">
            <h3 class="footer-box-h3">thémes</h3>
            <a href="#">my europe</a>
            <a href="#">sport</a>
            <a href="#">actualités locales</a>
            <a href="#">culture et musique</a>
            <a href="#">environnement et nature</a>
            <a href="#">monde</a>
            <a href="#">sciences et technologies </a>
            <a href="#">vie pratique</a>
        </div>
        <div class="box">
            <h3 class="footer-box-h3">services</h3>
            <a href="#">live</a>
            <a href="#">score centre</a>
            <a href="#">météo</a>
            <a href="#">Le JT</a>
            <a href="#">titres diffusés</a>
            <a href="#">concours</a>
            <a href="#">archives (sitemap)</a>
            <a href="#">code promo</a>
        </div>
        <div class="box">
            <h3 class="footer-box-h3">Liens pricipales</h3>
            <a href="../../index.php">acceuil</a>
            <a href="../../../views/articles.php">tous les articles</a>
            <a href="../../../views/profile.php">profile</a>
            <a href="../../../views/aboutMe.html">à propos</a>
        </div>
        <div class="box">
            <h3 class="footer-box-h3">programme radios</h3>
            <a href="#">classic 21</a>
            <a href="#">la Premiére</a>
            <a href="#">vivacité</a>
            <a href="#">tipik</a>
            <a href="#">musiq3</a>
            <a href="#">tarmac</a>
            <a href="#">viva+</a>
        </div>
    </div>

</footer>
<?php include_once('footer.php') ?>