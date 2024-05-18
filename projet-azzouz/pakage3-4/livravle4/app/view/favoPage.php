<?php include_once('header.php') ?>
<style>
    .big_articles {
        display: flex;
        flex-wrap: wrap;
    }

    .article {
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 10px;
        margin: 10px;
        width: 300px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .article h3 {
        margin-top: 0;
    }

    .article-image {
        width: 100%;
        height: auto;
        border-radius: 8px;
    }

    .error-message {
        color: red;
    }
</style>

<main>


    <main>
        <h1 align="center">Articles Favoris</h1>
        <div class="favorite-articles">
            <div class="favorite-articles">
                <ul>
                    <div id='itemList' class='big_articles'>
                    </div>
                </ul>
            </div>
    </main>

</main>

<hr style="margin-top: 20px;margin-bottom: 20px;border-color:transparent ;">
<?php include_once('footer.php'); ?>
<script src="../public/script/darkMode1.js"></script>
<script src="../public/script/favorites.js"></script>
</body>

</html>