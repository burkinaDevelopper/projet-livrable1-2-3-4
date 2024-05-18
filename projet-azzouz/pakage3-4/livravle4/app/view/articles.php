<?php include_once('header.php') ?>
<br>

<div class="search_panel" style="margin-left:25%;">
    <form action="search" method="POST" class="search-form">
        <div class="search_icon">
            <span class="material-symbols-outlined">search</span>
        </div>
        <input type="text" name="search" class="search_input" placeholder="recherche par category ou titre">
        <button type="submit" class="search_button">
            Rechercher
        </button>
    </form>
</div>

<main>
    <div class="container_tousArticles">
        <div class="top_informations" style="padding-left: 37px;">
            <div class="selection">
                <div class="titles">
                    <h2>News Showcase </h2>
                    <span>Histoires sélectionnées par les rédacteurs de la rédaction</span>
                </div>
                <?php
                print ' <a class="favopage" href="' . URL . '/favorite">Voire les Favorites <i class="bx bxs-bookmark-star"></i></a>';

                ?>
            </div>
        </div>

        <?php if (isset($result) && $result > 0) : ?>
            <div class="section-grid search-results">
                <?php foreach ($result as $row) : ?>
                    <!-- modal display -->
                    <!-- modal display -->
                    <?php if ($row['id_art'] != 'id_art') : ?>
                        <div class="grid-prod">
                            <article class="article">
                                <a href="articles/<?php echo $row['id_art']; ?>">
                                    <h2 data-content="<?= $row['content_art']; ?>" data-category="<?= $row['category_art']; ?>" data-image='<?= $row['image_art']; ?>' data-title='<?= $row['title_art']; ?>' class="modal-title"><?= $row['title_art']; ?>
                                    </h2>
                                </a>
                                <img src="<?= PUBLIQUE ?>/asset/images/<?= $row['image_art']; ?>" alt="Article Image">
                                <p><strong>Catégorie:</strong> <?= $row['category_art']; ?></p>
                                <form method="post" action="<?= URL ?>/favorite" class="favoritAdd">
                                    <input type="hidden" name="id_art" value="<?= $row['id_art']; ?>">
                                    <button type="submit" class="favorite-button">Ajouter aux favorite</button>
                                </form>
                            </article>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
            </div>
            <!-- Affichage de la pagination -->

        <?php else : ?>
            <p>Aucun article trouvé.</p>
        <?php endif; ?>

        <div class="container modal" id="info-modal">
            <button id="custom-close-button">Fermer</button>
            <h1 id="title"></h1>
            <p id="category"><span class='category'>Catégorie:</span></p>
            <img id="img" src="" alt=''>
            <p id="content"><strong>Contenu:</strong> </p>
        </div>

        <div class="container">

            <br><br>
            <div class="sponsor">

                <?php include 'sponsors.php'; ?>
            </div>

        </div>
</main>
<hr style="margin-top: 20px;margin-bottom: 20px;border-color:transparent ;">
<?php include_once('footer.php') ?>