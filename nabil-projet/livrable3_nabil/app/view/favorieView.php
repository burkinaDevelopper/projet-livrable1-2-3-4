<div class="news">
    <?php if (isset($_SESSION['articles']) && !empty($_SESSION['articles'])) : ?>
        <?php foreach ($_SESSION['articles'] as $article) : ?>
            <article>
                <a href="article_detail/<?= $article['id'] ?>">
                    <h3><?= $article['title'] ?>
                        <span class="date"><?= $article['date'] ?></span>
                    </h3>
                    <figure>
                        <img width="560" height="307" src="<?= URL ?>/public/asset/media/<?= $article['path'] ?>" alt="tumbnail" loading="lazy" sizes="(max-width: 560px) 100vw, 560px">
                    </figure>
                </a>
                <span><a href="<?= URL ?>dislike/<?= $article['id'] ?>"> supprimer <i class="fa-solid fa-trash"></i></a></span>
            </article>
        <?php endforeach ?>
    <?php else : ?>
        <article>
            <h3>Pas de favoris</h3>
        </article>
    <?php endif ?>
</div>