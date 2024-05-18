<?php include_once('header.php') ?>





<div class="container">
    <?php
    echo "<h1>" . $row["title_art"] . "</h1>";
    echo "<p><span class='category'>Catégorie:</span> " . $row["category_art"] . "</p>";
    echo "<img src='" . PUBLIQUE . "/asset/images/" . $row["image_art"] . "' alt='Image de l'article'>";
    echo "<p><strong>Contenu:</strong> " . $row["content_art"] . "</p>";
    ?>
</div>

<?php include_once('footer.php') ?>


</body>

</html>