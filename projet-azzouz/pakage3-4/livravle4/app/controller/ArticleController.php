<?php


class ArticleController
{
    private $articleModel;

    public function __construct()
    {
        $this->articleModel = new ArticleModel();
    }

    public function showAllArticles()
    {
        if (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            $role = $_SESSION['role'];
        }
        if (isset($_SESSION['articles'])) {
            $_SESSION['articles'];
        }
        $data = $this->articleModel->readAll();

        $isAdmin = false; // Suppose que l'utilisateur n'est pas un administrateur pour le moment
        $result = $data;

        require VIEW . '/articles.php';
    }

    public function article_detail($id_art)
    {
        $row = $this->articleModel->readArticle($id_art);
        include(VIEW . "/article_details.php");
    }
    public function search($search)
    {
        if (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            $role = $_SESSION['role'];
        }
        $isAdmin = false;
        $data = $this->articleModel->reachArticle($search);
        if (!empty($data)) {
            $result = $data;
            require VIEW . '/articles.php';
        } else {
            header("Location:" . URL . "/articles");
        }
    }
}
