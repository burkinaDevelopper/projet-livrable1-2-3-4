<section class="single_article">
    <div class="container">
        <h1 class="title">
            <?= $article['title'] ?>
        </h1>
        <img src="<?= URL ?>public/asset/media/<?= $article['image'] ?>" width="100%" alt="">
        <div class="content">
            <h3><?= $article['description'] ?></h3>
            <div>
                <div>
                    <?= $article['content'] ?>
                </div>
                <p>&nbsp;</p>
            </div>
            <p><?= $article['tag'] ?></p>
            <p>&nbsp;</p>
        </div>
    </div>
</section>