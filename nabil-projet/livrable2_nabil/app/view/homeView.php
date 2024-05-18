<div class="news">
    <?php foreach ($articles as $article) : ?>
        <article>
            <a href="<?= URL ?>article_detail/<?= $article['id'] ?>">
                <h3><?= $article['title'] ?>
                    <span class="date"><?= $article['date'] ?></span>
                </h3>
                <figure>
                    <img width="560" height="307" src="<?= URL ?>public/asset/media/<?= $article['path'] ?>" alt="tumbnail" loading="lazy" sizes="(max-width: 560px) 100vw, 560px">
                </figure>
            </a>
            <span><a href="<?= URL ?>like/<?= $article['id'] ?>"> liker <i class="fa-regular fa-heart"></i></a></span>
        </article>
    <?php endforeach ?>
</div>