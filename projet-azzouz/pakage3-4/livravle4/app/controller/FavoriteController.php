<?php


class FavoriteController
{


    public function __construct()
    {
        // $this->pressModel = new PressModel();
    }

    public function addFavorite($id_art)
    {
        $articleModel = new ArticleModel();
        $data = $articleModel->readArticle($id_art);

        if (isset($_SESSION['articles'])) {
            array_push($_SESSION['articles'], $data);
        } else {
            $_SESSION['articles'] = [$data];
        }
    }
    public function favoritJson()
    {
        if (isset($_SESSION['articles'])) {
            $articles = $_SESSION['articles'];
            echo json_encode($articles);
        }
    }

    public function getFavoriteArticles()
    {
        if (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            $role = $_SESSION['role'];
        }
        if (isset($_SESSION['articles'])) {
            $_SESSION['articles'];
        }
        include(VIEW . "/favoPage.php");
    }
    public function deleteFavorite($id)
    {
        $articleModel = new ArticleModel();
        $data = $articleModel->readArticle($id);
        if (isset($_SESSION['articles'])) {
            foreach ($_SESSION['articles'] as $key => $value) {
                if ($value['id_art'] == $id) {
                    unset($_SESSION['articles'][$key]);
                }
            }
        }
    }
}
