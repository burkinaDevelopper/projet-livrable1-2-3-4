<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="media/favicon-32x32.png">
    <!-- BOOTSTRAP CSS  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <!-- BOOTSTRAP ICONS  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- LINK CSS -->
    <link rel="stylesheet" href="<?= URL ?>/public/asset/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home Page</title>
</head>

<body>
    <div class="top_bar">
        <div class="container">
            <div class="top_row">
                <div class="logo_side">
                    <img class="logo" src="media/logo.png" alt="">
                </div>
                <div class="right_side">
                    <img class="direction" src="media/directradio_bis.png" alt="">
                </div>
                <button id="toggle-theme">mode sombre</button>
            </div>
        </div>
    </div>
    <header class="position-sticky">
        <nav>
            <div class="container">
                <div class="main_navbar position-sticky">
                    <ul class="navbar-list">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URL ?>">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URL ?>favories">Favories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Direct TV</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Dernier JT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URL ?>about">A propros</a>
                        </li>
                    </ul>
                    <form class="social_icons" role="search">
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <?php if (!isset($_SESSION['login'])) : ?>
                            <a href="<?= URL ?>login"><i class="bi bi-person-circle"></i> connexion</a>
                        <?php else : ?>
                            <i class="fa-solid fa-arrow-right-from-bracket"></i><a class="errors" href="<?= URL ?>logout">deconnexion</a>
                        <?php endif ?>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <div class="nav_bottom_row">
        <div class="container">
            <ul>
                <li>
                    <a href="#">Crise chez Delhaize</a>
                </li>
                <li>
                    <a href="#">Attentats de Bruxelles</a>
                </li>
                <li>
                    <a href="#">Collecte des déchets</a>
                </li>
                <li>
                    <a href="#">Métro 3</a>
                </li>
                <li class="last_item">
                    <a href="#">Accueil des réfugiés</a>
                </li>
                <li class="last_item">

                </li>
                <li class="last_item">
                    <span>----------------</span>
                </li>
                <li class="last_item">
                    <?php if (isset($_SESSION['login'])) : ?>
                        <strong>Bienvenue <?= $_SESSION['login'] ?></strong>
                    <?php endif ?>
                </li>
            </ul>
        </div>

    </div>
    <main>
        <section class="banner">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <center>
                        <a href="#">
                            <?php if (isset($sponsor)) : ?>
                                <p><?= $sponsor['text'] ?></p>
                                <img src="<?= $sponsor['background_image'] ?>" alt="">
                            <?php endif ?>
                        </a>
                    </center>
                </div>
            </div>
            <form action="" method="post" class="form-search" id="articleSearch">
                <input type="text" placeholder="rechercher articles" id="inputSearch">
                <button type="submit" class="send">rechercher</button>
            </form>
        </section>

        <section class="articles">
            <div class="container">
                <div class="articles_row">
                    <div class="side_bar">
                        <a href="#">
                            <img src="<?= URL ?>/public/asset/media/banniere-proces-attentats-bruxelles-560x307.jpg" alt="">
                        </a>
                        <div class="space"></div>
                        <a href="#">
                            <img src="media/Bouton-Podcast-BX1.jpg" alt="">
                        </a>
                        <h4>Direct info</h4>
                        <div class="info">
                            <a href="#">“Valorisez l’eau de pluie” : Laeken invite ses citoyens à lutter contre les inondations</a>
                            <span class="date">24 août 2023 - 11:00</span>
                        </div>
                        <div class="info">
                            <a href="#">La 7e édition du Forest Sounds battra son plein les 1er et 2 septembre</a>
                            <span class="date">24 août 2023 - 11:00</span>
                        </div>
                        <div class="info">
                            <a href="#">Saint-Gilles : l’auteur du braquage s’est rendu peu avant midi</a>
                            <span class="date">24 août 2023 - 11:00</span>
                        </div>
                        <div class="info">
                            <a href="#">Les inspecteurs bruxellois de l’emploi ont constaté 17% d’infractions en 2022</a>
                            <span class="date">24 août 2023 - 11:00</span>
                        </div>
                        <div class="info">
                            <a href="#">1.000 patients supplémentaires : la maison médicale “La Passerelle” à Molenbeek va s’agrandir</a>
                            <span class="date">24 août 2023 - 11:00</span>
                        </div>
                        <div class="info">
                            <a href="#">“Valorisez l’eau de pluie” : Laeken invite ses citoyens à lutter contre les inondations</a>
                            <span class="date">24 août 2023 - 11:00</span>
                        </div>
                        <div class="info">
                            <a href="#">Pascal Vanderveeren, avocat de Patokh Chodiev dans l’affaire du Kazakhate, est décédé</a>
                            <span class="date">24 août 2023 - 11:00</span>
                        </div>
                    </div>
                    <div>
                        <?= $page_content ?>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>Quick Links</h3>
                    <ul>
                        <li>
                            <a href="#">Grille des programmes</a>
                        </li>
                        <li>
                            <a href="#">Nos émissions</a>
                        </li>
                        <li>
                            <a href="#">Dernier JT</a>
                        </li>
                        <li>
                            <a href="#">Replay</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Radio et podcasts</h3>
                    <ul>
                        <li>
                            <a href="#">Direct & replay</a>
                        </li>
                        <li>
                            <a href="#">Grille des programmes</a>
                        </li>
                        <li>
                            <a href="#">Nos podcasts</a>
                        </li>
                        <li>
                            <a href="#">Bonjour Bruxelles</a>
                        </li>
                        <li>
                            <a href="#">Bonjour Bruxelles</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Info</h3>
                    <ul>
                        <li>
                            <a href="#">Mon BX1</a>
                        </li>
                        <li>
                            <a href="#">Sport</a>
                        </li>
                        <li>
                            <a href="#">Culture</a>
                        </li>
                        <li>
                            <a href="#">Économie</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Quick Links</h3>
                    <ul>
                        <li>
                            <a href="#">Publicité</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script>
        var link = "<?= URL ?>";
    </script>""
    <script src="<?= URL ?>public/asset/js/jquery-3.7.1.min.js"></script>
    <script src="<?= URL ?>public/asset/js/script.js"></script>
    <script src="<?= URL ?>/public/asset/js/dark.js"></script>
</body>

</html>